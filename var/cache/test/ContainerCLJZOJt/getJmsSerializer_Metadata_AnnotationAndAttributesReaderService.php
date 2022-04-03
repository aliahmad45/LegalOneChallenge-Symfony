<?php

namespace ContainerCLJZOJt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_Metadata_AnnotationAndAttributesReaderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'jms_serializer.metadata.annotation_and_attributes_reader' shared service.
     *
     * @return \JMS\Serializer\Metadata\Driver\AttributeDriver\AttributeReader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'AttributeDriver'.\DIRECTORY_SEPARATOR.'AttributeReader.php';

        return $container->privates['jms_serializer.metadata.annotation_and_attributes_reader'] = new \JMS\Serializer\Metadata\Driver\AttributeDriver\AttributeReader(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()));
    }
}
