<?php

namespace ContainerQNKiuLa;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb092e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer339ed = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties20b35 = [
        
    ];

    public function getConnection()
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'getConnection', array(), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'getMetadataFactory', array(), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'getExpressionBuilder', array(), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'beginTransaction', array(), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'getCache', array(), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'transactional', array('func' => $func), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'commit', array(), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->commit();
    }

    public function rollback()
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'rollback', array(), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'getClassMetadata', array('className' => $className), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'createQuery', array('dql' => $dql), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'createNamedQuery', array('name' => $name), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'createQueryBuilder', array(), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'flush', array('entity' => $entity), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'clear', array('entityName' => $entityName), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->clear($entityName);
    }

    public function close()
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'close', array(), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->close();
    }

    public function persist($entity)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'persist', array('entity' => $entity), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'remove', array('entity' => $entity), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'refresh', array('entity' => $entity), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'detach', array('entity' => $entity), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'merge', array('entity' => $entity), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'contains', array('entity' => $entity), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'getEventManager', array(), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'getConfiguration', array(), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'isOpen', array(), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'getUnitOfWork', array(), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'getProxyFactory', array(), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'initializeObject', array('obj' => $obj), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'getFilters', array(), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'isFiltersStateClean', array(), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'hasFilters', array(), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return $this->valueHolderb092e->hasFilters();
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

        $instance->initializer339ed = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb092e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb092e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb092e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, '__get', ['name' => $name], $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        if (isset(self::$publicProperties20b35[$name])) {
            return $this->valueHolderb092e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb092e;

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

        $targetObject = $this->valueHolderb092e;
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
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb092e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb092e;
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
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, '__isset', array('name' => $name), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb092e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb092e;
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
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, '__unset', array('name' => $name), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb092e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb092e;
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
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, '__clone', array(), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        $this->valueHolderb092e = clone $this->valueHolderb092e;
    }

    public function __sleep()
    {
        $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, '__sleep', array(), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;

        return array('valueHolderb092e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer339ed = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer339ed;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer339ed && ($this->initializer339ed->__invoke($valueHolderb092e, $this, 'initializeProxy', array(), $this->initializer339ed) || 1) && $this->valueHolderb092e = $valueHolderb092e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb092e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb092e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
