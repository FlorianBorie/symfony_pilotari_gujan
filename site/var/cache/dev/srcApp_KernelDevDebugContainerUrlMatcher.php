<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/site' => array(array(array('_route' => 'site', '_controller' => 'App\\Controller\\SiteController::index'), null, null, null, false, null)),
            '/' => array(array(array('_route' => 'home', '_controller' => 'App\\Controller\\SiteController::home'), null, null, null, false, null)),
            '/evenement' => array(array(array('_route' => 'evenement', '_controller' => 'App\\Controller\\SiteController::evenement'), null, null, null, false, null)),
            '/competition' => array(array(array('_route' => 'competition', '_controller' => 'App\\Controller\\SiteController::competion'), null, null, null, false, null)),
            '/sponsor' => array(array(array('_route' => 'sponsor', '_controller' => 'App\\Controller\\SiteController::sponsor'), null, null, null, false, null)),
            '/newsletter' => array(array(array('_route' => 'newsletter', '_controller' => 'App\\Controller\\SiteController::newsletter'), null, null, null, false, null)),
            '/connexion' => array(array(array('_route' => 'connexion', '_controller' => 'App\\Controller\\SiteController::connexion'), null, null, null, false, null)),
            '/inscription' => array(array(array('_route' => 'inscription', '_controller' => 'App\\Controller\\SiteController::form'), null, null, null, false, null)),
            '/contacter' => array(array(array('_route' => 'contacter', '_controller' => 'App\\Controller\\SiteController::contacter'), null, null, null, false, null)),
            '/attente' => array(array(array('_route' => 'attente', '_controller' => 'App\\Controller\\SiteController::attente'), null, null, null, false, null)),
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/inscription/([^/]++)/edit(*:33)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:71)'
                        .'|wdt/([^/]++)(*:90)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:135)'
                                .'|router(*:149)'
                                .'|exception(?'
                                    .'|(*:169)'
                                    .'|\\.css(*:182)'
                                .')'
                            .')'
                            .'|(*:192)'
                        .')'
                    .')'
                .')(?:/?)$}sDu',
        );
        $this->dynamicRoutes = array(
            33 => array(array(array('_route' => 'inscription_edit', '_controller' => 'App\\Controller\\SiteController::form'), array('id'), null, null, false, null)),
            71 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, null)),
            90 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, null)),
            135 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, null)),
            149 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, null)),
            169 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, null)),
            182 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, null)),
            192 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, null)),
        );
    }
}
