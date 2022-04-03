<?php

namespace ContainerOqsbB6j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_Metadata_TraceableCacheService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'jms_serializer.metadata.traceable_cache' shared service.
     *
     * @return \JMS\SerializerBundle\Debug\TraceableDriver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'metadata'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'CacheInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer-bundle'.\DIRECTORY_SEPARATOR.'Debug'.\DIRECTORY_SEPARATOR.'TraceableDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'metadata'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'ClearableCacheInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'metadata'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'FileCache.php';

        return $container->privates['jms_serializer.metadata.traceable_cache'] = new \JMS\SerializerBundle\Debug\TraceableDriver(($container->privates['jms_serializer.metadata.cache.file_cache'] ?? ($container->privates['jms_serializer.metadata.cache.file_cache'] = new \Metadata\Cache\FileCache(($container->targetDir.''.'/jms_serializer')))));
    }
}
