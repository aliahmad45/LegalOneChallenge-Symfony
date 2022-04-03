<?php

namespace Container9qJ1Uzj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Openapi_OptionsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.openapi.options' shared service.
     *
     * @return \ApiPlatform\Core\OpenApi\Options
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'OpenApi'.\DIRECTORY_SEPARATOR.'Options.php';

        return $container->privates['api_platform.openapi.options'] = new \ApiPlatform\Core\OpenApi\Options('', '', '0.0.0', false, 'oauth2', 'application', '', '', '', [], [], NULL, NULL, NULL, NULL, NULL, NULL);
    }
}
