<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Payment
 *
 * @ORM\Table(name="payment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PaymentRepository")
 */
class Payment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="amount", type="integer")
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="cardnumber", type="string", length=255)
     * 
     *@Assert\Length(
     *          min = 20,
     *          max = 20,
     *          minMessage = "Your credit card number must have 20 digits!",
     *          maxMessage = "Your credic card number must have 20 digits!"
     *) 
     */
    private $cardnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="cardcvv", type="string", length=255)
     * 
     * @Assert\Length(
     *          min = 3,
     *          max = 3,
     *          minMessage = "Your credit card CVV number must have 3 digits!",
     *          maxMessage = "Your credit card CVV number must have 3 digits!"
     *)
     */
    private $cardcvv;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     *
     * @return Payment
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set cardnumber
     *
     * @param string $cardnumber
     *
     * @return Payment
     */
    public function setCardnumber($cardnumber)
    {
        $this->cardnumber = $cardnumber;

        return $this;
    }

    /**
     * Get cardnumber
     *
     * @return string
     */
    public function getCardnumber()
    {
        return $this->cardnumber;
    }

    /**
     * Set cardcvv
     *
     * @param string $cardcvv
     *
     * @return Payment
     */
    public function setCardcvv($cardcvv)
    {
        $this->cardcvv = $cardcvv;

        return $this;
    }

    /**
     * Get cardcvv
     *
     * @return string
     */
    public function getCardcvv()
    {
        return $this->cardcvv;
    }
}

