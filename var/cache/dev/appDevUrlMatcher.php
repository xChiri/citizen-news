<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  '_route' => 'homepage',);
        }

        // photo
        if (0 === strpos($pathinfo, '/photo') && preg_match('#^/photo/(?P<title>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'photo')), array (  '_controller' => 'AppBundle\\Controller\\UserController::photoAction',));
        }

        // newsdetails
        if (0 === strpos($pathinfo, '/newsdetails') && preg_match('#^/newsdetails/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsdetails')), array (  '_controller' => 'AppBundle\\Controller\\UserController::newsDetailsAction',));
        }

        // buy
        if (0 === strpos($pathinfo, '/buy') && preg_match('#^/buy/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'buy')), array (  '_controller' => 'AppBundle\\Controller\\UserController::newsBuyAction',));
        }

        if (0 === strpos($pathinfo, '/sign')) {
            // signin
            if ($pathinfo === '/signin') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::signinAction',  '_route' => 'signin',);
            }

            // signup
            if ($pathinfo === '/signup') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::signupAction',  '_route' => 'signup',);
            }

        }

        // forgotpassword
        if ($pathinfo === '/forgotpassword') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::forgotPasswordAction',  '_route' => 'forgotpassword',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::logoutAction',  '_route' => 'logout',);
        }

        // myprofile
        if ($pathinfo === '/myprofile') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::myProfileAction',  '_route' => 'myprofile',);
        }

        // profile
        if (0 === strpos($pathinfo, '/newsdetails/profile') && preg_match('#^/newsdetails/profile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile')), array (  '_controller' => 'AppBundle\\Controller\\UserController::profileAction',));
        }

        // addmoney
        if ($pathinfo === '/addmoney') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::addMoneyAction',  '_route' => 'addmoney',);
        }

        // payment
        if ($pathinfo === '/payment') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::paymentAction',  '_route' => 'payment',);
        }

        // addnews
        if ($pathinfo === '/addnews') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::addNewsAction',  '_route' => 'addnews',);
        }

        if (0 === strpos($pathinfo, '/delete')) {
            // news_delete
            if (preg_match('#^/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_delete')), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteAction',));
            }

            // comment_delete
            if (0 === strpos($pathinfo, '/deletecomment') && preg_match('#^/deletecomment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_delete')), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteCommentAction',));
            }

        }

        // admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::adminAction',  '_route' => 'admin',);
        }

        // deleteasadmin
        if (0 === strpos($pathinfo, '/deleteAsAdmin') && preg_match('#^/deleteAsAdmin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteasadmin')), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteAsAdminAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
