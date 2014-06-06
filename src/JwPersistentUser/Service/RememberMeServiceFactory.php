<?php

namespace JwPersistentUser\Service;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface;

class RememberMeServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $service = new RememberMeService;

        $service->setModuleOptions($service->get('JwPersistentUser\ModuleOptions'));
        $service->setMapper($serviceLocator->get('JwPersistentUser\Mapper\SerieToken'));

        return $service;
    }
}
