<?php

namespace ContainerOqsbB6j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_Metadata_XmlDriverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'jms_serializer.metadata.xml_driver' shared service.
     *
     * @return \JMS\Serializer\Metadata\Driver\XmlDriver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'metadata'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'DriverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'metadata'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'AdvancedDriverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'metadata'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'AbstractFileDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'ExpressionMetadataTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'XmlDriver.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'metadata'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'metadata'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'AdvancedFileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'metadata'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'FileLocator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer-bundle'.\DIRECTORY_SEPARATOR.'Debug'.\DIRECTORY_SEPARATOR.'TraceableFileLocator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'ParserInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Parser.php';

        return $container->privates['jms_serializer.metadata.xml_driver'] = new \JMS\Serializer\Metadata\Driver\XmlDriver(($container->privates['jms_serializer.metadata.traceable_file_locator'] ?? ($container->privates['jms_serializer.metadata.traceable_file_locator'] = new \JMS\SerializerBundle\Debug\TraceableFileLocator([]))), ($container->privates['jms_serializer.serialized_name_annotation_strategy'] ?? $container->load('getJmsSerializer_SerializedNameAnnotationStrategyService')), ($container->privates['jms_serializer.type_parser'] ?? ($container->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())));
    }
}
