<?php

namespace Container5uLUAxw;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder89bc3 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer10944 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties36558 = [
        
    ];

    public function getConnection()
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'getConnection', array(), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'getMetadataFactory', array(), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'getExpressionBuilder', array(), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'beginTransaction', array(), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'getCache', array(), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->getCache();
    }

    public function transactional($func)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'transactional', array('func' => $func), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'wrapInTransaction', array('func' => $func), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'commit', array(), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->commit();
    }

    public function rollback()
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'rollback', array(), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'getClassMetadata', array('className' => $className), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'createQuery', array('dql' => $dql), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'createNamedQuery', array('name' => $name), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'createQueryBuilder', array(), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'flush', array('entity' => $entity), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'clear', array('entityName' => $entityName), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->clear($entityName);
    }

    public function close()
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'close', array(), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->close();
    }

    public function persist($entity)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'persist', array('entity' => $entity), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'remove', array('entity' => $entity), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'refresh', array('entity' => $entity), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'detach', array('entity' => $entity), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'merge', array('entity' => $entity), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'getRepository', array('entityName' => $entityName), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'contains', array('entity' => $entity), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'getEventManager', array(), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'getConfiguration', array(), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'isOpen', array(), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'getUnitOfWork', array(), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'getProxyFactory', array(), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'initializeObject', array('obj' => $obj), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'getFilters', array(), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'isFiltersStateClean', array(), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'hasFilters', array(), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return $this->valueHolder89bc3->hasFilters();
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

        $instance->initializer10944 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder89bc3) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder89bc3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder89bc3->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, '__get', ['name' => $name], $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        if (isset(self::$publicProperties36558[$name])) {
            return $this->valueHolder89bc3->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89bc3;

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

        $targetObject = $this->valueHolder89bc3;
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
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89bc3;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder89bc3;
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
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, '__isset', array('name' => $name), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89bc3;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder89bc3;
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
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, '__unset', array('name' => $name), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder89bc3;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder89bc3;
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
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, '__clone', array(), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        $this->valueHolder89bc3 = clone $this->valueHolder89bc3;
    }

    public function __sleep()
    {
        $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, '__sleep', array(), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;

        return array('valueHolder89bc3');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer10944 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer10944;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer10944 && ($this->initializer10944->__invoke($valueHolder89bc3, $this, 'initializeProxy', array(), $this->initializer10944) || 1) && $this->valueHolder89bc3 = $valueHolder89bc3;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder89bc3;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder89bc3;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
