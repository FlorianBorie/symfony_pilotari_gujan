<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'webpack_encore.entrypoint_lookup' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\webpack-encore-bundle\\src\\Asset\\EntrypointLookupInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\webpack-encore-bundle\\src\\Asset\\EntrypointLookup.php';

return $this->privates['webpack_encore.entrypoint_lookup'] = new \Symfony\WebpackEncoreBundle\Asset\EntrypointLookup(($this->targetDirs[3].'/public/build/entrypoints.json'));
