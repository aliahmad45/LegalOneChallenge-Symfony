<?php

namespace Container9qJ1Uzj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_Routes_DefaultService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'nelmio_api_doc.routes.default' shared service.
     *
     * @return \Symfony\Component\Routing\RouteCollection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'RouteCollection.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'FilteredRouteCollectionBuilder.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'ControllerReflector.php';

        return $container->privates['nelmio_api_doc.routes.default'] = (new \Nelmio\ApiDocBundle\Routing\FilteredRouteCollectionBuilder(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()), ($container->privates['nelmio_api_doc.controller_reflector'] ?? ($container->privates['nelmio_api_doc.controller_reflector'] = new \Nelmio\ApiDocBundle\Util\ControllerReflector($container))), 'default', ['path_patterns' => [0 => '^/api(?!/doc$)'], 'host_patterns' => [], 'name_patterns' => [], 'with_annotation' => false, 'disable_default_routes' => false]))->filter(($container->services['router'] ?? $container->getRouterService())->getRouteCollection());
    }
}
