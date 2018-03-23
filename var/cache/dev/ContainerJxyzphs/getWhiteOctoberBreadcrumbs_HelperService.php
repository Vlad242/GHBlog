<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'white_october_breadcrumbs.helper' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Templating/Helper/HelperInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Templating/Helper/Helper.php';
include_once $this->targetDirs[3].'/vendor/whiteoctober/breadcrumbs-bundle/WhiteOctober/BreadcrumbsBundle/Templating/Helper/BreadcrumbsHelper.php';

return $this->services['white_october_breadcrumbs.helper'] = new \WhiteOctober\BreadcrumbsBundle\Templating\Helper\BreadcrumbsHelper(${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->load(__DIR__.'/getTemplatingService.php')) && false ?: '_'}, ${($_ = isset($this->services['white_october_breadcrumbs']) ? $this->services['white_october_breadcrumbs'] : $this->load(__DIR__.'/getWhiteOctoberBreadcrumbsService.php')) && false ?: '_'}, $this->parameters['white_october_breadcrumbs.options']);