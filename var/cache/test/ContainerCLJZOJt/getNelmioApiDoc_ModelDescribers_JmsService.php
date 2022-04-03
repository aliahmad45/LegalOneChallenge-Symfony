<?php

namespace ContainerCLJZOJt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_ModelDescribers_JmsService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_api_doc.model_describers.jms' shared service.
     *
     * @return \Nelmio\ApiDocBundle\ModelDescriber\JMSModelDescriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'ModelDescriber'.\DIRECTORY_SEPARATOR.'ModelDescriberInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'Describer'.\DIRECTORY_SEPARATOR.'ModelRegistryAwareInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'Describer'.\DIRECTORY_SEPARATOR.'ModelRegistryAwareTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'api-doc-bundle'.\DIRECTORY_SEPARATOR.'ModelDescriber'.\DIRECTORY_SEPARATOR.'JMSModelDescriber.php';

        return $container->privates['nelmio_api_doc.model_describers.jms'] = new \Nelmio\ApiDocBundle\ModelDescriber\JMSModelDescriber(($container->privates['jms_serializer.metadata_factory'] ?? $container->load('getJmsSerializer_MetadataFactoryService')), ($container->privates['annotations.reader'] ?? $container->getAnnotations_ReaderService()), [0 => 'json'], NULL);
    }
}
