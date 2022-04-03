<?php

namespace Container9qJ1Uzj;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdd80a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerecee9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2a70d = [
        
    ];

    public function getConnection()
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'getConnection', array(), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'getMetadataFactory', array(), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'getExpressionBuilder', array(), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'beginTransaction', array(), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'getCache', array(), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->getCache();
    }

    public function transactional($func)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'transactional', array('func' => $func), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'wrapInTransaction', array('func' => $func), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'commit', array(), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->commit();
    }

    public function rollback()
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'rollback', array(), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'getClassMetadata', array('className' => $className), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'createQuery', array('dql' => $dql), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'createNamedQuery', array('name' => $name), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'createQueryBuilder', array(), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'flush', array('entity' => $entity), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'clear', array('entityName' => $entityName), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->clear($entityName);
    }

    public function close()
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'close', array(), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->close();
    }

    public function persist($entity)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'persist', array('entity' => $entity), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'remove', array('entity' => $entity), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'refresh', array('entity' => $entity), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'detach', array('entity' => $entity), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'merge', array('entity' => $entity), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'contains', array('entity' => $entity), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'getEventManager', array(), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'getConfiguration', array(), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'isOpen', array(), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'getUnitOfWork', array(), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'getProxyFactory', array(), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'initializeObject', array('obj' => $obj), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'getFilters', array(), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'isFiltersStateClean', array(), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'hasFilters', array(), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return $this->valueHolderdd80a->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerecee9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdd80a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdd80a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdd80a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, '__get', ['name' => $name], $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        if (isset(self::$publicProperties2a70d[$name])) {
            return $this->valueHolderdd80a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd80a;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdd80a;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd80a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdd80a;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, '__isset', array('name' => $name), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd80a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdd80a;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, '__unset', array('name' => $name), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd80a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdd80a;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, '__clone', array(), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        $this->valueHolderdd80a = clone $this->valueHolderdd80a;
    }

    public function __sleep()
    {
        $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, '__sleep', array(), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;

        return array('valueHolderdd80a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerecee9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerecee9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerecee9 && ($this->initializerecee9->__invoke($valueHolderdd80a, $this, 'initializeProxy', array(), $this->initializerecee9) || 1) && $this->valueHolderdd80a = $valueHolderdd80a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdd80a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdd80a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
