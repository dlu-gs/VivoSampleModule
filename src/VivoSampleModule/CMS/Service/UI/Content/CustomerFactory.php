<?php
namespace VivoSampleModule\CMS\Service\UI\Content;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\FactoryInterface;

class CustomerFactory implements FactoryInterface
{
    /**
     * Create UI Page object.
     *
     * @param  ServiceLocatorInterface $serviceLocator
     * @return \Zend\Stdlib\Message
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $customer   = new \VivoSampleModule\CMS\UI\Content\Customer();
        return $customer;
    }
}
