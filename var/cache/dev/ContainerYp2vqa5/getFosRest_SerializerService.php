<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_rest.serializer' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Serializer/Serializer.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Serializer/SymfonySerializerAdapter.php';

return $this->services['fos_rest.serializer'] = new \FOS\RestBundle\Serializer\SymfonySerializerAdapter(${($_ = isset($this->services['serializer']) ? $this->services['serializer'] : $this->load(__DIR__.'/getSerializerService.php')) && false ?: '_'});
