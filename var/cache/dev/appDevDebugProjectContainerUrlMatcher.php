<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        // admin_room
        if ('/admin/room' === $pathinfo) {
            return array (  '_controller' => 'Geek\\BlogBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin_room',);
        }

        if (0 === strpos($pathinfo, '/api')) {
            // app.swagger_ui
            if ('/api-doc' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_appswagger_ui;
                }

                return array (  '_controller' => 'nelmio_api_doc.controller.swagger_ui',  '_route' => 'app.swagger_ui',);
            }
            not_appswagger_ui:

            if (0 === strpos($pathinfo, '/api/posts')) {
                // get_post
                if (preg_match('#^/api/posts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_get_post;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_post')), array (  '_controller' => 'Geek\\BlogBundle\\Controller\\Api\\PostsController:getAction',  '_format' => 'json',));
                }
                not_get_post:

                // get_post_posts
                if (preg_match('#^/api/posts/(?P<page>[^/]++)/posts/(?P<limit>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_get_post_posts;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_post_posts')), array (  '_controller' => 'Geek\\BlogBundle\\Controller\\Api\\PostsController:getPostsAction',  '_format' => 'json',));
                }
                not_get_post_posts:

            }

            // new_category_category
            if (0 === strpos($pathinfo, '/api/categories/categories/new') && preg_match('#^/api/categories/categories/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_new_category_category;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'new_category_category')), array (  '_controller' => 'Geek\\BlogBundle\\Controller\\Api\\CategoryController:newCategoryAction',  '_format' => 'json',));
            }
            not_new_category_category:

        }

        // categorylist
        if ('/category' === $pathinfo) {
            return array (  '_controller' => 'Geek\\BlogBundle\\Controller\\CategoryController::listAction',  '_route' => 'categorylist',);
        }

        // newcomment
        if (0 === strpos($pathinfo, '/newcomment') && preg_match('#^/newcomment/(?P<post_id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newcomment')), array (  '_controller' => 'Geek\\BlogBundle\\Controller\\CommentController::newCommentAction',));
        }

        // newpost
        if ('/newpost' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Geek\\BlogBundle\\Controller\\PostController::newPostAction',  '_route' => 'newpost',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'newpost'));
            }

            return $ret;
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Geek\\BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        // redirect
        if ('/redirect' === $pathinfo) {
            return array (  '_controller' => 'Geek\\BlogBundle\\Controller\\DefaultController::redirectAction',  '_route' => 'redirect',);
        }

        // register
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'Geek\\BlogBundle\\Controller\\DefaultController::registerAction',  '_route' => 'register',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ('/login' === $pathinfo) {
                    return array (  '_controller' => 'Geek\\BlogBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ('/login_check' === $pathinfo) {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ('/logout' === $pathinfo) {
                return array('_route' => 'logout');
            }

            // likecheck
            if (0 === strpos($pathinfo, '/likecheck') && preg_match('#^/likecheck/(?P<post>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'likecheck')), array (  '_controller' => 'Geek\\BlogBundle\\Controller\\PostController::likesCheckerAction',));
            }

        }

        // search
        if (0 === strpos($pathinfo, '/search') && preg_match('#^/search(?:/(?P<str>[^/]++)(?:/(?P<limit>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'search')), array (  'str' => '',  'limit' => 5,  '_controller' => 'Geek\\BlogBundle\\Controller\\DefaultController::searchAction',));
        }

        // subscribecheck
        if (0 === strpos($pathinfo, '/subscribecheck') && preg_match('#^/subscribecheck/(?P<user>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'subscribecheck')), array (  '_controller' => 'Geek\\BlogBundle\\Controller\\UserController::likesCheckerAction',));
        }

        if (0 === strpos($pathinfo, '/post')) {
            // postlist
            if (0 === strpos($pathinfo, '/postlist') && preg_match('#^/postlist(?:/(?P<limit>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'postlist')), array (  'limit' => 5,  '_controller' => 'Geek\\BlogBundle\\Controller\\PostController::listAction',));
            }

            if (0 === strpos($pathinfo, '/postBy')) {
                // postByTag
                if (0 === strpos($pathinfo, '/postByTag') && preg_match('#^/postByTag/(?P<tag>[^/]++)(?:/(?P<limit>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'postByTag')), array (  'limit' => 5,  '_controller' => 'Geek\\BlogBundle\\Controller\\PostController::listByTagAction',));
                }

                // postByCategory
                if (0 === strpos($pathinfo, '/postByCategory') && preg_match('#^/postByCategory/(?P<category>[^/]++)(?:/(?P<limit>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'postByCategory')), array (  'limit' => 5,  '_controller' => 'Geek\\BlogBundle\\Controller\\PostController::listByCategoryAction',));
                }

                // postByUser
                if (0 === strpos($pathinfo, '/postByUser') && preg_match('#^/postByUser/(?P<user>[^/]++)(?:/(?P<limit>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'postByUser')), array (  'limit' => 5,  '_controller' => 'Geek\\BlogBundle\\Controller\\PostController::listByUserAction',));
                }

            }

            // viewPost
            if (preg_match('#^/post/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'viewPost')), array (  '_controller' => 'Geek\\BlogBundle\\Controller\\PostController::viewPostAction',));
            }

        }

        // deletepost
        if (0 === strpos($pathinfo, '/deletepost') && preg_match('#^/deletepost/(?P<post>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletepost')), array (  '_controller' => 'Geek\\BlogBundle\\Controller\\PostController::deletePostAction',));
        }

        // updatepost
        if (0 === strpos($pathinfo, '/updatepost') && preg_match('#^/updatepost/(?P<post>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'updatepost')), array (  '_controller' => 'Geek\\BlogBundle\\Controller\\PostController::UpdatePostAction',));
        }

        // user_room
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user(?:/(?P<limit>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_room')), array (  'limit' => 5,  '_controller' => 'Geek\\BlogBundle\\Controller\\UserController::indexAction',));
        }

        // taglist
        if ('/Taglist' === $pathinfo) {
            return array (  '_controller' => 'Geek\\BlogBundle\\Controller\\TagController::listAction',  '_route' => 'taglist',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
