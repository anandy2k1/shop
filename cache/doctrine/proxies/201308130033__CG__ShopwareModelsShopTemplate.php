<?php

namespace Shopware\Proxies\__CG__\Shopware\Models\Shop;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Template extends \Shopware\Models\Shop\Template implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setAuthor($author)
    {
        $this->__load();
        return parent::setAuthor($author);
    }

    public function getAuthor()
    {
        $this->__load();
        return parent::getAuthor();
    }

    public function setTemplate($template)
    {
        $this->__load();
        return parent::setTemplate($template);
    }

    public function getTemplate()
    {
        $this->__load();
        return parent::getTemplate();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setLicense($license)
    {
        $this->__load();
        return parent::setLicense($license);
    }

    public function getLicense()
    {
        $this->__load();
        return parent::getLicense();
    }

    public function setEsi($esi)
    {
        $this->__load();
        return parent::setEsi($esi);
    }

    public function getEsi()
    {
        $this->__load();
        return parent::getEsi();
    }

    public function setEmotion($emotion)
    {
        $this->__load();
        return parent::setEmotion($emotion);
    }

    public function getEmotion($emotion)
    {
        $this->__load();
        return parent::getEmotion($emotion);
    }

    public function setStyle($style)
    {
        $this->__load();
        return parent::setStyle($style);
    }

    public function getStyle()
    {
        $this->__load();
        return parent::getStyle();
    }

    public function getVersion()
    {
        $this->__load();
        return parent::getVersion();
    }

    public function setVersion($version)
    {
        $this->__load();
        return parent::setVersion($version);
    }

    public function getPlugin()
    {
        $this->__load();
        return parent::getPlugin();
    }

    public function setPlugin($plugin)
    {
        $this->__load();
        return parent::setPlugin($plugin);
    }

    public function toString()
    {
        $this->__load();
        return parent::toString();
    }

    public function fromArray(array $array = array (
))
    {
        $this->__load();
        return parent::fromArray($array);
    }

    public function setOneToOne($data, $model, $property, $reference = NULL)
    {
        $this->__load();
        return parent::setOneToOne($data, $model, $property, $reference);
    }

    public function setOneToMany($data, $model, $property, $reference = NULL)
    {
        $this->__load();
        return parent::setOneToMany($data, $model, $property, $reference);
    }

    public function setManyToOne($data, $model, $property)
    {
        $this->__load();
        return parent::setManyToOne($data, $model, $property);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'template', 'name', 'description', 'author', 'license', 'esi', 'style', 'emotion', 'version', 'pluginId', 'plugin');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}