<?php

namespace ContainerCLJZOJt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_SerializedNameAnnotationStrategyService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'jms_serializer.serialized_name_annotation_strategy' shared service.
     *
     * @return \JMS\Serializer\Naming\SerializedNameAnnotationStrategy
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Naming'.\DIRECTORY_SEPARATOR.'PropertyNamingStrategyInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Naming'.\DIRECTORY_SEPARATOR.'SerializedNameAnnotationStrategy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Naming'.\DIRECTORY_SEPARATOR.'CamelCaseNamingStrategy.php';

        return $container->privates['jms_serializer.serialized_name_annotation_strategy'] = new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(($container->privates['jms_serializer.camel_case_naming_strategy'] ?? ($container->privates['jms_serializer.camel_case_naming_strategy'] = new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true))));
    }
}
