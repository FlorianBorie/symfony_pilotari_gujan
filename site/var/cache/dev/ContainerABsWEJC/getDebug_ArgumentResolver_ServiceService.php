<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\ServiceValueResolver.php';

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'App\\Controller\\SiteController::contacter' => array('privates', '.service_locator.Txvqv4R', 'get_ServiceLocator_Txvqv4RService.php', true),
    'App\\Controller\\SiteController::contacterMail' => array('privates', '.service_locator.e8auZAH', 'get_ServiceLocator_E8auZAHService.php', true),
    'App\\Controller\\SiteController::form' => array('privates', '.service_locator.YgK9hbb', 'get_ServiceLocator_YgK9hbbService.php', true),
    'App\\Controller\\SiteController:contacter' => array('privates', '.service_locator.Txvqv4R', 'get_ServiceLocator_Txvqv4RService.php', true),
    'App\\Controller\\SiteController:contacterMail' => array('privates', '.service_locator.e8auZAH', 'get_ServiceLocator_E8auZAHService.php', true),
    'App\\Controller\\SiteController:form' => array('privates', '.service_locator.YgK9hbb', 'get_ServiceLocator_YgK9hbbService.php', true),
))), ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
