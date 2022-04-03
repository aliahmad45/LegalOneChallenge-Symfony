<?php

namespace ContainerCLJZOJt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_Generator_DefaultService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'nelmio_api_doc.generator.default' shared service.
     *
     * @return \Nelmio\ApiDocBundle\ApiDocGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'ApiDocGenerator.php';

        $container->services['nelmio_api_doc.generator.default'] = $instance = new \Nelmio\ApiDocBundle\ApiDocGenerator(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['nelmio_api_doc.describers.config'] ?? $container->load('getNelmioApiDoc_Describers_ConfigService'));
            yield 1 => ($container->privates['nelmio_api_doc.describers.config.default'] ?? ($container->privates['nelmio_api_doc.describers.config.default'] = new \Nelmio\ApiDocBundle\Describer\ExternalDocDescriber([], true)));
            yield 2 => ($container->privates['nelmio_api_doc.describers.api_platform'] ?? $container->load('getNelmioApiDoc_Describers_ApiPlatformService'));
            yield 3 => ($container->privates['nelmio_api_doc.describers.openapi_php.default'] ?? $container->load('getNelmioApiDoc_Describers_OpenapiPhp_DefaultService'));
            yield 4 => ($container->privates['nelmio_api_doc.describers.route.default'] ?? $container->load('getNelmioApiDoc_Describers_Route_DefaultService'));
            yield 5 => ($container->privates['nelmio_api_doc.describers.default'] ?? ($container->privates['nelmio_api_doc.describers.default'] = new \Nelmio\ApiDocBundle\Describer\DefaultDescriber()));
        }, 6), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['nelmio_api_doc.model_describers.jms'] ?? $container->load('getNelmioApiDoc_ModelDescribers_JmsService'));
            yield 1 => ($container->privates['nelmio_api_doc.model_describers.object'] ?? $container->load('getNelmioApiDoc_ModelDescribers_ObjectService'));
            yield 2 => ($container->privates['nelmio_api_doc.model_describers.object_fallback'] ?? ($container->privates['nelmio_api_doc.model_describers.object_fallback'] = new \Nelmio\ApiDocBundle\ModelDescriber\FallbackObjectModelDescriber()));
        }, 3));

        $instance->setAlternativeNames([]);
        $instance->setMediaTypes([0 => 'json']);
        $instance->setLogger(($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }
}
