<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appTestUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appTestUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'wysow_archivemytweets_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Wysow\\ArchiveMyTweetsBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'wysow_archivemytweets_default_favorites' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Wysow\\ArchiveMyTweetsBundle\\Controller\\DefaultController::favoritesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/favorites',    ),  ),  4 =>   array (  ),),
        'wysow_archivemytweets_default_archive' => array (  0 =>   array (    0 => 'year',    1 => 'month',  ),  1 =>   array (    '_controller' => 'Wysow\\ArchiveMyTweetsBundle\\Controller\\DefaultController::archiveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'month',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'year',    ),    2 =>     array (      0 => 'text',      1 => '/archive',    ),  ),  4 =>   array (  ),),
        'wysow_archivemytweets_default_client' => array (  0 =>   array (    0 => 'client',  ),  1 =>   array (    '_controller' => 'Wysow\\ArchiveMyTweetsBundle\\Controller\\DefaultController::clientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'client',    ),    1 =>     array (      0 => 'text',      1 => '/client',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
