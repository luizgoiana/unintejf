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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // homepage
            if ($pathinfo === '/app/example') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            }

            if (0 === strpos($pathinfo, '/admin')) {
                // admin
                if ($pathinfo === '/admin') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
                }

                if (0 === strpos($pathinfo, '/admin/home')) {
                    // admin.home
                    if ($pathinfo === '/admin/home') {
                        return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::homeAction',  '_route' => 'admin.home',);
                    }

                    // admin.home.update
                    if ($pathinfo === '/admin/home/update') {
                        return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::homeUpdate',  '_route' => 'admin.home.update',);
                    }

                    // admin.home.add
                    if ($pathinfo === '/admin/home/add') {
                        return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::homeBannerTopImageAdd',  '_route' => 'admin.home.add',);
                    }

                    // admin.home.delete
                    if (0 === strpos($pathinfo, '/admin/home/delete') && preg_match('#^/admin/home/delete(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.home.delete')), array (  '_controller' => 'AdminBundle\\Controller\\AdminController::homeBannerTopImageDelete',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/sobre')) {
                    // admin.sobre
                    if ($pathinfo === '/admin/sobre') {
                        return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::sobreAction',  '_route' => 'admin.sobre',);
                    }

                    // admin.sobre.update
                    if ($pathinfo === '/admin/sobre/update') {
                        return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::sobreUpdate',  '_route' => 'admin.sobre.update',);
                    }

                    // admin.sobre.add
                    if ($pathinfo === '/admin/sobre/add') {
                        return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::sobreQueFazemosAdd',  '_route' => 'admin.sobre.add',);
                    }

                    // admin.sobre.delete
                    if (0 === strpos($pathinfo, '/admin/sobre/delete') && preg_match('#^/admin/sobre/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.sobre.delete')), array (  '_controller' => 'AdminBundle\\Controller\\AdminController::sobreQueFazemosDelete',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/es')) {
                    if (0 === strpos($pathinfo, '/admin/especialidades')) {
                        // admin.especialidades
                        if ($pathinfo === '/admin/especialidades') {
                            return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::especialidadesAction',  '_route' => 'admin.especialidades',);
                        }

                        // admin.especialidades.add
                        if (0 === strpos($pathinfo, '/admin/especialidades/add') && preg_match('#^/admin/especialidades/add(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.especialidades.add')), array (  'id' => -1,  '_controller' => 'AdminBundle\\Controller\\AdminController::especialidadesAdd',));
                        }

                        // admin.especialidades.delete
                        if (0 === strpos($pathinfo, '/admin/especialidades/delete') && preg_match('#^/admin/especialidades/delete(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.especialidades.delete')), array (  '_controller' => 'AdminBundle\\Controller\\AdminController::especialidadesDelete',));
                        }

                        // admin.especialidades.preparaedicao
                        if (0 === strpos($pathinfo, '/admin/especialidades/preparaedicao') && preg_match('#^/admin/especialidades/preparaedicao(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.especialidades.preparaedicao')), array (  'id' => -1,  '_controller' => 'AdminBundle\\Controller\\AdminController::especialidadesPreparaEdicao',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/estrutura')) {
                        // admin.estrutura
                        if ($pathinfo === '/admin/estrutura') {
                            return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::estruturaAction',  '_route' => 'admin.estrutura',);
                        }

                        // admin.estrutura.add
                        if ($pathinfo === '/admin/estrutura/add') {
                            return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::estruturaImageAdd',  '_route' => 'admin.estrutura.add',);
                        }

                        // admin.estrutura.delete
                        if (0 === strpos($pathinfo, '/admin/estrutura/delete') && preg_match('#^/admin/estrutura/delete(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.estrutura.delete')), array (  '_controller' => 'AdminBundle\\Controller\\AdminController::estruturaImageDelete',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/blog')) {
                    // admin.blogpostage
                    if (0 === strpos($pathinfo, '/admin/blogpostage') && preg_match('#^/admin/blogpostage(?:(?P<idPost>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.blogpostage')), array (  'idPost' => -1,  '_controller' => 'AdminBundle\\Controller\\AdminController::blogPostage',));
                    }

                    // admin.blog
                    if ($pathinfo === '/admin/blog') {
                        return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::blogAction',  '_route' => 'admin.blog',);
                    }

                }

            }

        }

        // home_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home_default_index');
            }

            return array (  '_controller' => 'HomeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home_default_index',);
        }

        // sobre_default_index
        if ($pathinfo === '/sobre') {
            return array (  '_controller' => 'SobreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'sobre_default_index',);
        }

        if (0 === strpos($pathinfo, '/es')) {
            // especialidade_default_index
            if ($pathinfo === '/especialidades') {
                return array (  '_controller' => 'EspecialidadeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'especialidade_default_index',);
            }

            // estrutura_default_index
            if ($pathinfo === '/estrutura') {
                return array (  '_controller' => 'EstruturaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'estrutura_default_index',);
            }

        }

        if (0 === strpos($pathinfo, '/blog')) {
            // blog_default_index
            if (preg_match('#^/blog(?:/(?P<max>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_default_index')), array (  'max' => 4,  '_controller' => 'BlogBundle\\Controller\\DefaultController::indexAction',));
            }

            // blog.filter
            if (preg_match('#^/blog/(?P<year>[^/]++)/(?P<month>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog.filter')), array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::filterBlog',));
            }

            // blog.home
            if (0 === strpos($pathinfo, '/blogview') && preg_match('#^/blogview/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog.home')), array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::showPost',));
            }

        }

        if (0 === strpos($pathinfo, '/contato')) {
            // contato_default_index
            if ($pathinfo === '/contato') {
                return array (  '_controller' => 'ContatoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'contato_default_index',);
            }

            // contato_default_sendemail
            if ($pathinfo === '/contato/send') {
                return array (  '_controller' => 'ContatoBundle\\Controller\\DefaultController::sendEmail',  '_route' => 'contato_default_sendemail',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
