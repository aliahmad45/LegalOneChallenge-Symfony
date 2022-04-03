<?php

namespace Container9qJ1Uzj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateLogCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\UpdateLogCommand' shared autowired service.
     *
     * @return \App\Command\UpdateLogCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'UpdateLogCommand.php';

        $container->privates['App\\Command\\UpdateLogCommand'] = $instance = new \App\Command\UpdateLogCommand(\dirname(__DIR__, 4), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setName('app:update-log');
        $instance->setDescription('command');

        return $instance;
    }
}
