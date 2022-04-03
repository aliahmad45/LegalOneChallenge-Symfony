<?php

namespace ContainerCLJZOJt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecrets_DecryptionKeyService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'secrets.decryption_key' shared service.
     *
     * @return \Symfony\Component\String\LazyString
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'string'.\DIRECTORY_SEPARATOR.'LazyString.php';

        return $container->privates['secrets.decryption_key'] = \Symfony\Component\String\LazyString::fromCallable(($container->privates['container.getenv'] ?? $container->load('getContainer_GetenvService')), 'base64:default::SYMFONY_DECRYPTION_SECRET');
    }
}
