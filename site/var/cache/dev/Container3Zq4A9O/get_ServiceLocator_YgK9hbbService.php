<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.YgK9hbb' shared service.

return $this->privates['.service_locator.YgK9hbb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'manager' => array('services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService.php', true),
));
