<?php

namespace ContainerCLJZOJt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_TraceableEventDispatcherService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'jms_serializer.traceable_event_dispatcher' shared service.
     *
     * @return \JMS\SerializerBundle\Debug\TraceableEventDispatcher
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventDispatcher'.\DIRECTORY_SEPARATOR.'EventDispatcherInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventDispatcher'.\DIRECTORY_SEPARATOR.'EventDispatcher.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventDispatcher'.\DIRECTORY_SEPARATOR.'LazyEventDispatcher.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'jms'.\DIRECTORY_SEPARATOR.'serializer-bundle'.\DIRECTORY_SEPARATOR.'Debug'.\DIRECTORY_SEPARATOR.'TraceableEventDispatcher.php';

        $container->privates['jms_serializer.traceable_event_dispatcher'] = $instance = new \JMS\SerializerBundle\Debug\TraceableEventDispatcher(($container->privates['jms_serializer.event_dispatcher.service_locator'] ?? $container->load('getJmsSerializer_EventDispatcher_ServiceLocatorService')));

        $instance->addListener('serializer.pre_serialize', [0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPreSerialize'], NULL, NULL, NULL);
        $instance->addListener('serializer.pre_serialize', [0 => 'jms_serializer.traceable_runs_listener', 1 => 'saveRunInfo'], NULL, NULL, NULL);
        $instance->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'], NULL, NULL, 'Doctrine\\Persistence\\Proxy');
        $instance->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'], NULL, NULL, 'Doctrine\\Common\\Persistence\\Proxy');
        $instance->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\ORM\\PersistentCollection');
        $instance->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\ODM\\MongoDB\\PersistentCollection');
        $instance->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\ODM\\PHPCR\\PersistentCollection');
        $instance->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\Persistence\\Proxy');
        $instance->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\Common\\Persistence\\Proxy');
        $instance->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'ProxyManager\\Proxy\\LazyLoadingInterface');
        $instance->addListener('serializer.post_serialize', [0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPostSerialize'], NULL, NULL, NULL);

        return $instance;
    }
}
