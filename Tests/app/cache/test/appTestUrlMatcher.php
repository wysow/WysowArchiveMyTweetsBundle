<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appTestUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appTestUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // wysow_archivemytweets_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'wysow_archivemytweets_default_index');
            }

            return array (  '_controller' => 'Wysow\\ArchiveMyTweetsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'wysow_archivemytweets_default_index',);
        }

        // wysow_archivemytweets_default_favorites
        if ($pathinfo === '/favorites') {
            return array (  '_controller' => 'Wysow\\ArchiveMyTweetsBundle\\Controller\\DefaultController::favoritesAction',  '_route' => 'wysow_archivemytweets_default_favorites',);
        }

        // wysow_archivemytweets_default_archive
        if (0 === strpos($pathinfo, '/archive') && preg_match('#^/archive/(?P<year>[^/]++)/(?P<month>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'wysow_archivemytweets_default_archive')), array (  '_controller' => 'Wysow\\ArchiveMyTweetsBundle\\Controller\\DefaultController::archiveAction',));
        }

        // wysow_archivemytweets_default_client
        if (0 === strpos($pathinfo, '/client') && preg_match('#^/client/(?P<client>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'wysow_archivemytweets_default_client')), array (  '_controller' => 'Wysow\\ArchiveMyTweetsBundle\\Controller\\DefaultController::clientAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
