<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\Payment;
use AppBundle\Entity\ForgotUser;
use AppBundle\Entity\SimpleUser;
use AppBundle\Entity\News;
use AppBundle\Entity\Comment;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        $login = $session->get('login');
        $news = $this->getDoctrine()->getRepository('AppBundle:News')->findAll();
        if($login != null){
            $todo = $this->getDoctrine()->getRepository('AppBundle:User')->findOneBy(array('username'=>$login->getUsername()));
        return $this->render('default/index.html.twig', array('news' => $news, 'name' =>$login->getUsername(), 'type' =>$todo->getType()));
        }
        else
        {
            return $this->render('default/index.html.twig', array('news' => $news));
        }
    }
    
    /**
     * @Route("/photo/{title}", name="photo")
     */
    
    public function photoAction($title, Request $request)
    {
        $todo = $this->getDoctrine()->getRepository('AppBundle:News')->findOneBy(array('title' => $title));
        $extension = strchr($todo->getPhotoName(), '.');      
        if ($extension == ".png") {
            $im = imagecreatefrompng("uploads/" . $title . ".png");
            header('Content-Type: image/png');
            imagepng($im);
        } else if($extension == ".jpeg")
        {
            $im = imagecreatefromjpeg("uploads/" . $title . ".jpeg");
            header('Content-Type: image/jpeg');
            imagejpeg($im);
        }
        return $this->render('default/photo.html.twig');
    }
    
    /**
     * @Route("/newsdetails/{id}", name="newsdetails")
     */
    public function newsDetailsAction($id, Request $request)
    {
        $session = $request->getSession();
        $login = $session->get('login');
        $news = $this->getDoctrine()->getRepository('AppBundle:News')->findOneById($id);
        if ($login != null) {

            $todo = $this->getDoctrine()->getRepository('AppBundle:User')->findOneBy(array('username' => $login->getUsername()));
            $i = $news->getUploadedBy();
            $uBy = $this->getDoctrine()->getRepository('AppBundle:User')->findOneBy(array('username' => $i));


            $comments = $this->getDoctrine()->getRepository('AppBundle:Comment')->findAll();

            $comment = new Comment;

            $form = $this->createFormBuilder($comment)
                    ->add('content', TextareaType::class, array('label' => 'Content', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                    ->add('save', SubmitType::class, array('label' => 'Comment', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
                    ->getForm();

            $form->handleRequest($request);


            if ($form->isSubmitted() && $form->isValid()) {
                $now = new\DateTime('now');

                $comment->setLetBy($login->getUsername());
                $comment->setUploadedAt($now);
                $comment->setContent($form['content']->getData());
                $comment->setNewsId($id);

                $em = $this->getDoctrine()->getManager();

                $em->persist($comment);
                $em->flush();

                $this->addFlash('notice', 'Comment left!');
                

                //return $this->render('default/newsdetails.html.twig', array('id' => $id, 'comments' => $comments, 'uBy' => $uBy, 'news' => $news, 'name' => $login->getUsername(), 'type' => $todo->getType(), 'form' => $form->createView()));
            
                return $this->redirect($id);
            }
            return $this->render('default/newsdetails.html.twig', array('id' => $id, 'comments' => $comments, 'uBy' => $uBy, 'news' => $news, 'name' => $login->getUsername(), 'type' => $todo->getType(), 'form' => $form->createView()));
        } else {
            $comments = $this->getDoctrine()->getRepository('AppBundle:Comment')->findAll();
            return $this->render('default/newsdetails.html.twig', array('id' => $id, 'news' => $news, 'comments' => $comments));
        }
    }
    
    /**
     * @Route("/buy/{id}", name="buy")
     */
    public function newsBuyAction($id, Request $request)
    {
        $session = $request->getSession();
        $login = $session->get('login');
        $em = $this->getDoctrine()->getManager();
        $news = $this->getDoctrine()->getRepository('AppBundle:News')->findOneById($id);
        if($login != null){
            $todo = $this->getDoctrine()->getRepository('AppBundle:User')->findOneBy(array('username'=>$login->getUsername()));
            if($todo->getMoney() >= $news->getPrice()){
                $this->addFlash('notice', 'You bought the rights for these news!');
                $news->setBought(true);
                $news->setBoughtBy($todo->getUsername());
                $uploader = $this->getDoctrine()->getRepository('AppBundle:User')->findOneBy(array('username'=>$news->getUploadedBy()));
                $amount = $uploader->getMoney();
                $uploader->setMoney($amount + $news->getPrice());
                $actualMoney = $todo->getMoney();
                $todo->setMoney($actualMoney-$news->getPrice());
                $em->flush();
                $previousRoute = $request->headers->get('referer');
        
                return $this->redirectToRoute('homepage');
                //return $this->render('default/newsdetails.html.twig', array('news' => $news, 'name' => $login->getUsername(), 'type' => $todo->getType()));
                
            }
            else
            {
                $this->addFlash('notice', 'You do not have enough money in your account to buy the rights for these news!');
                return $this->redirectToRoute('addmoney');
                //return $this->render('default/newsdetails.html.twig', array('news' => $news, 'name' => $login->getUsername(), 'type' => $todo->getType()));
            }
        }
        else
        {
            $this->addFlash('notice', 'You must be logged in with a news company account in order to buy the rights for news!');
            return $this->redirectToRoute('homepage');
        }
        
    }
    
    
    
    /**
     * @Route("/signin", name="signin")
     */
    public function signinAction(Request $request)
    {
        $todo = new SimpleUser;
        
        $session = $request->getSession();
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em -> getRepository('AppBundle:User');
        
        $form = $this->createFormBuilder($todo)
                ->add('username', TextType::class, array('label' => 'Username', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('password', PasswordType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('save', SubmitType::class, array('label' => 'Sign in', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
                ->getForm();
        
        $form->handleRequest($request);
        
        
        if($form->isSubmitted() && $form->isValid())
        {
            $session->clear();
            $username = $form['username']->getData();
            $password = sha1($form['password']->getData());
            
            
        
            $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
            
            if($user){
                $login = new SimpleUser;
                $login->setUsername($username);
                $login->setPassword($password);
                $session->set('login', $login);
                $this->addFlash('notice', 'Logged in');
                return $this->redirectToRoute('homepage');
            }
            else{
                $this->addFlash('notice', 'Not Logged in');
                return $this->render('default/signin.html.twig', array('form'=>$form->createView()));
            }
        }    
        else if($session->has('login'))
            {
                $login = $session->get('login');
                return $this->redirectToRoute('homepage');
            }
        return $this->render('default/signin.html.twig', array('form'=>$form->createView()));
    }
    
    /**
     * @Route("/signup", name="signup")
     */
    public function signupAction(Request $request)
    {
        
       $todo = new User;
       
       $securityQuestions = array(
           "What was the last name of your primary school teacher?" => 1,
           "When you were young, what did you want to be when you grew up?" => 2,
           "Who was you childhood hero?" => 3,
           "What was your childhood nickname?" => 4,
           "What is your youngest brother's birthday" => 5
       );
        
        $form = $this->createFormBuilder($todo)
                ->add('type', ChoiceType::class, array('label' => 'Type', 'choices' => array('Citizen' => 'Citizen', 'News Company' => 'News Company'), 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('username', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))               
                ->add('email', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('password', PasswordType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('question', ChoiceType::class, array('label' => 'Security question(in case you forget your password)', 'choices' => $securityQuestions, 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('answer', TextType::class, array('label' => 'Answer', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('city', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('phonenumber', TextType::class, array('label' => 'Phone Number', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('save', SubmitType::class, array('label' => 'Create Account', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
                ->getForm();
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid())
        {
            $type = $form['type']->getData();
            $name = $form['name']->getData();
            $username = $form['username']->getData();
            $email = $form['email']->getData();
            $password = $form['password']->getData();
            $city =  $form['city']->getData();
            $phonenumber = $form['phonenumber']->getData();
            $question = $form['question']->getData();
            $answer = $form['answer']->getData();
            
            $now = new\DateTime('now');
            
            $testUsername = $this->getDoctrine()->getRepository('AppBundle:User')->findOneBy(array('username'=>$username));
            
            if($testUsername == null)
            {
            $todo->setType($type);
            $todo->setName($name);
            $todo->setUsername($username);
            $todo->setEmail($email);
            $todo->setPassword(sha1($password));
            $todo->setCity($city);
            $todo->setPhoneNumber($phonenumber);
            $todo->setQuestion($question);
            $todo->setAnswer($answer);
            $todo->setMoney(0);
            $todo->setUploadedAt($now);
            
            
           $em = $this->getDoctrine()->getManager();
           
           $em->persist($todo);
           $em->flush();
           
           $this->addFlash('notice', 'Account Created');
           
           return $this->redirectToRoute('signin');
            }
            else {
                $this->addFlash('notice', 'Username already taken!');
                return $this->render('default/signup.html.twig', array('form'=>$form->createView()));
            }
        }    
        
        return $this->render('default/signup.html.twig', array('form'=>$form->createView()));
    }
    
    /**
     * @Route("/forgotpassword", name="forgotpassword")
     */
    public function forgotPasswordAction(Request $request)
    {
        $todo = new ForgotUser;
         $securityQuestions = array(
           "What was the last name of your primary school teacher?" => 1,
           "When you were young, what did you want to be when you grew up?" => 2,
           "Who was you childhood hero?" => 3,
           "What was your childhood nickname?" => 4,
           "What is your youngest brother's birthday" => 5
       );
          $form = $this->createFormBuilder($todo)
                ->add('username', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('question', ChoiceType::class, array('label' => 'Security question(in case you forget your password)', 'choices' => $securityQuestions, 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('answer', TextType::class, array('label' => 'Answer', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('password', PasswordType::class, array('label' => 'New Password', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('save', SubmitType::class, array('label' => 'Create Account', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
                ->getForm();

        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid())
        {
            $username = $form['username']->getData();
            $password = sha1($form['password']->getData());
            $answer = $form['answer']->getData();
            $question = $form['question']->getData();
            
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('AppBundle:User')->findOneBy(array('username' => $username, 'question' => $question, 'answer' => $answer));
            
            if($user){
                $user->setPassword($password);
                $this->addFlash('notice', 'Password changed');
                $em->flush();
                return $this->redirectToRoute('signin');
            }
            else{
                $this->addFlash('notice', 'Incorrect data');
                return $this->render('default/forgotpassword.html.twig', array('form'=>$form->createView()));
            }
        }    
        
        
        return $this->render('default/forgotpassword.html.twig', array('form'=>$form->createView()));
    }
    
    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction(Request $request){
        $session = $request->getSession();
        $session->clear();
        return $this->redirectToRoute('homepage');
    }
    
    /**
     * @Route("/myprofile", name="myprofile")
     */
    public function myProfileAction(Request $request)
    {
        $session = $request->getSession();
        $login = $session->get('login');
        if($login != NULL)
        {
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em -> getRepository('AppBundle:User');
            $username = $login->getUsername();
            $password = $login->getPassword();
        $todo = $this->getDoctrine()->getRepository('AppBundle:User')->findOneBy(array('username'=>$login->getUsername()));
            $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
            $news = $this->getDoctrine()->getRepository('AppBundle:News')->findBy(array('uploadedBy' => $user->getUsername()));
            $ownedNews = $this->getDoctrine()->getRepository('AppBundle:News')->findBy(array('boughtBy' => $user->getUsername()));
            return $this->render('default/myprofile.html.twig', array('type' => $todo->getType(), 'user' => $user, 'name' =>$login->getUsername(), 'news' => $news, 'ownedNews' => $ownedNews));
        }
        else
        {
            return $this->render('default/index.html.twig');
        }
    }
    
    /**
     * @Route("newsdetails/profile/{id}", name="profile")
     */
    public function profileAction($id, Request $request)
    {
        $session = $request->getSession();
        $login = $session->get('login');
        
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em -> getRepository('AppBundle:User');
            $username = $login->getUsername();
            $password = $login->getPassword();
        
            $user = $repository->findOneById($id);
            $loggedin = $repository->findOneBy(array('username' => $login->getUsername()));
            $news = $this->getDoctrine()->getRepository('AppBundle:News')->findBy(array('uploadedBy' => $user->getUsername()));
            $ownedNews = $this->getDoctrine()->getRepository('AppBundle:News')->findBy(array('boughtBy' => $user->getUsername()));
            return $this->render('default/profile.html.twig', array('type' => $loggedin->getType(), 'user' => $user, 'name' =>$login->getUsername(), 'news' => $news, 'ownedNews' => $ownedNews));
        
    }
    
    /**
     * @Route("/addmoney", name="addmoney")
     */
    public function addMoneyAction(Request $request)
    {
        $session = $request->getSession();
        $login = $session->get('login');
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em -> getRepository('AppBundle:User');
            $username = $login->getUsername();
            $password = $login->getPassword();
            $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
            
                $payment = new Payment;
                $form = $this->createFormBuilder($payment)
                ->add('amount', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('cardnumber', TextType::class, array('label' => 'Card Number', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('cardcvv', TextType::class, array('label' => 'Card CVV', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('save', SubmitType::class, array('label' => 'Add money', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
                ->getForm();
                
                $form->handleRequest($request);
                
                if ($form->isSubmitted() && $form->isValid()) {
            $amount = $user->getMoney() + $form['amount']->getData();
            $cardnumber = $form['cardnumber']->getData();
            $cardcvv = $form['cardcvv']->getData();
            if (ctype_digit($form['amount']->getData()) && ctype_digit($cardnumber) && ctype_digit($cardcvv)) {
                $user->setMoney($amount);
                $this->addFlash('notice', 'Money added in your account!');
                $em->flush();
                return $this->redirectToRoute('myprofile');
            } else {
                if (!ctype_digit($cardnumber)) {
                    $this->addFlash('notice', 'Your card number cannot contain other characters than digits!');
                }
                if (!ctype_digit($cardcvv)) {
                    $this->addFlash('notice', 'Your credit card CVV cannot contain other characters than digits!');
                }
                if (!ctype_digit($form['amount']->getData())) {
                    $this->addFlash('notice', 'Enter the amount of money you want to add in your account(digits only)!');
                }
                return $this->render('default/addmoney.html.twig', array('user' => $user, 'name' => $login->getUsername(), 'form' => $form->createView()));
            }
        }

        return $this->render('default/addmoney.html.twig', array('user' => $user, 'name' =>$login->getUsername(), 'form'=>$form->createView()));
        
    }
    
    /**
     * @Route("/payment", name="payment")
     */
    public function paymentAction(Request $request)
    {
        $session = $request->getSession();
        $login = $session->get('login');
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em -> getRepository('AppBundle:User');
            $username = $login->getUsername();
            $password = $login->getPassword();
            $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
            
                $payment = new Payment;
                $form = $this->createFormBuilder($payment)
                ->add('amount', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('cardnumber', TextType::class, array('label' => 'Card number', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('cardcvv', TextType::class, array('label' => 'Card CVV', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('save', SubmitType::class, array('label' => 'Withdraw money', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
                ->getForm();
                
                $form->handleRequest($request);
               // if($form['amount']->getData() <= $user->getMoney() && ctype_digit($form['amount']) && ctype_digit($form['cardnumber']) && ctype_digit($form['cardcvv'])){
                if ($form->isSubmitted() && $form->isValid()) {
                    $amount = $user->getMoney() - $form['amount']->getData();
                    $cardnumber = $form['cardnumber']->getData();
                    $cardcvv = $form['cardcvv']->getData();
                    if($amount >= 0 && ctype_digit($cardnumber) && ctype_digit($cardcvv) && ctype_digit($form['amount']->getData()))
                    {
                        $user->setMoney($amount);
                        $this->addFlash('notice', 'Money withdrawn from your account!');
                        $em->flush();
                        return $this->redirectToRoute('myprofile');
                    } else {
                if ($amount <= 0) {
                    $this->addFlash('notice', 'You cannot withdraw more than you have in your account!');
                }
                if (!ctype_digit($cardnumber)) {
                    $this->addFlash('notice', 'Your card number cannot contain other characters than digits!');
                }
                if (!ctype_digit($cardcvv)) {
                    $this->addFlash('notice', 'Your credit card CVV cannot contain other characters than digits!');
                }
                if (!ctype_digit($form['amount']->getData())) {
                    $this->addFlash('notice', 'Enter the amount of money you want to withdraw(digits only)!');
                }
                return $this->render('default/payment.html.twig', array('user' => $user, 'name' => $login->getUsername(), 'form' => $form->createView()));
            }
        }
               
            
            return $this->render('default/payment.html.twig', array('user' => $user, 'name' =>$login->getUsername(), 'form'=>$form->createView()));
        
    }
    
    /**
     * @Route("/addnews", name="addnews")
     */
    public function addNewsAction(Request $request)
    {
        $session = $request->getSession();
        $login = $session->get('login');

        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('AppBundle:User');
        $username = $login->getUsername();
        $password = $login->getPassword();
        $user = $repository->findOneBy(array('username' => $username, 'password' => $password));

        $news = new News;
        
        $form = $this->createFormBuilder($news)
                ->add('title', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('content', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('place', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('photo', FileType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))               
                ->add('price', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
                ->add('save', SubmitType::class, array('label' => 'Submit News', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
                ->getForm();
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid())
        {
            $title = $form['title']->getData();
            $content = $form['content']->getData();
            $photo = $form['photo']->getData();
            $price = $form['price']->getData();
            $place = $form['place']->getData();
            
            $now = new\DateTime('now');
            
            $extension = $photo->guessExtension();
            
            if((strcmp($extension, "png") == 1 || strcmp($extension, "jpg"))&&  ctype_digit($form['price']->getData()))
            {
            $news->setTitle($title);
            $news->setContent($content);
            $news->setPrice($price);
            $news->setPhoto($photo);
            $news->setUploadedBy($login->getUsername());
            $news->setBought(0);
            $news->setUploadDate($now);
            $news->setPlace($place);
            $news->setBoughtBy("");
            $news->setUploaderId($user->getId());
            $news->setBuyerId(0);
            
            
            
            $dir = "uploads";
     
           
            $photo->move($dir, $title.'.'.$extension);
            
            
            $news->setPhotoName($title.'.'.$extension);
              
           $em->persist($news);
           $em->flush();
           
           $this->addFlash('notice', 'News Added!');
           
           return $this->redirectToRoute('homepage');
           }
           else
           {
               if(!ctype_digit($form['price']->getData())){
                $this->addFlash('notice', 'The price of your news must be a number!');
                 return $this->render('default/addnews.html.twig', array('user' => $user, 'name' =>$login->getUsername(), 'form'=>$form->createView()));
               }
               else
               {
                 $this->addFlash('notice', 'The photo you want to upload must be in png or jpeg format!');
                 return $this->render('default/addnews.html.twig', array('user' => $user, 'name' =>$login->getUsername(), 'form'=>$form->createView()));
               }
               
           }
        }    
        
         return $this->render('default/addnews.html.twig', array('user' => $user, 'name' =>$login->getUsername(), 'form'=>$form->createView()));
    }
    
    /**
     * @Route("delete/{id}", name="news_delete")
     */
    
    public function deleteAction($id, Request $request)
    {
        $news = $this->getDoctrine()->getRepository('AppBundle:News')->findOneById($id);
        $em = $this->getDoctrine()->getManager();
        
        $em->remove($news);
        
        $em->flush();
        
        $this->addFlash('notice', 'News deleted!');
        
        return $this->redirectToRoute('myprofile');
    }
    
    /**
     * @Route("deletecomment/{id}", name="comment_delete")
     */
    
    public function deleteCommentAction($id, Request $request)
    {
        $comment = $this->getDoctrine()->getRepository('AppBundle:Comment')->findOneById($id);
        $em = $this->getDoctrine()->getManager();
        if($comment != NULL){
        $em->remove($comment);
        
        $em->flush();
        
        $this->addFlash('notice', 'Comment deleted!');
        }
        
        $previousRoute = $request->headers->get('referer');
        
        return $this->redirect($previousRoute);
    }
    
    /**
     * @Route("admin", name="admin")
     */
    public function adminAction(Request $request)
    {
        $listOfNews = $this->getDoctrine()->getRepository('AppBundle:News')->findAll();
        
        $admin;
        
        return $this->render('default/admin.html.twig', array('news' => $listOfNews));
        
    }
    
    /**
     * @Route("deleteAsAdmin/{id}", name="deleteasadmin")
     */
    public function deleteAsAdminAction($id, Request $request)
    {
        $comment = $this->getDoctrine()->getRepository('AppBundle:News')->findOneById($id);
        $em = $this->getDoctrine()->getManager();
        if($comment != NULL){
        $em->remove($comment);
        
        $em->flush();
        
        $this->addFlash('notice', 'News deleted!');
        }
        
        $previousRoute = $request->headers->get('referer');
        
        return $this->redirect($previousRoute);
    
    }
    
}
