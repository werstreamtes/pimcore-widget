<?php

namespace WSEWidget;

use NewsBundle\DependencyInjection\CompilerPass\PresetPass;
use NewsBundle\Tool\Install;
use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Pimcore\Extension\Bundle\Traits\PackageVersionTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class WSEWidget extends AbstractPimcoreBundle
{
    use PackageVersionTrait;

    public const PACKAGE_NAME = 'werstreamtes/pimcore-widget';

    public function build(ContainerBuilder $container): void
    {
        parent::build($container);
        $container->addCompilerPass(new PresetPass());
    }

    public function getInstaller(): Install
    {
        return $this->container->get(Install::class);
    }

    public function getJsPaths(): array
    {
        return [
        ];
    }

    protected function getComposerPackageName(): string
    {
        return self::PACKAGE_NAME;
    }
}
