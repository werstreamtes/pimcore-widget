<?php

namespace WerStreamtEs\WSEWidgetPimcoreBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Pimcore\Extension\Bundle\PimcoreBundleInterface;
use PackageVersions\Versions;
use Pimcore\Extension\Bundle\Traits\PackageVersionTrait;
use Pimcore\Extension\Bundle\Installer\InstallerInterface;
use Pimcore\Extension\Bundle\PimcoreBundleAdminClassicInterface;
use Pimcore\Extension\Bundle\Traits\BundleAdminClassicTrait;

class WSEWidgetPimcoreBundle extends AbstractPimcoreBundle implements PimcoreBundleInterface, PimcoreBundleAdminClassicInterface
{

    use BundleAdminClassicTrait;
    use PackageVersionTrait;

    const PACKAGE_NAME = 'werstreamtes/pimcore-widget';
    const BUNDLE_NAME = 'WSEWidgetPimcoreBundle';

    public function getJsPaths(): array
    {
        return [];
    }

    public function getInstaller(): ?InstallerInterface
    {
        return $this->container->get(Installer::class);
    }

    public function getNiceName(): string
    {
        return 'WerStreamt.es Widget';
    }

    public function getEditmodeJsPaths(): array
    {
        return [];
    }

    public function getCssPaths(): array
    {
        return [];
    }

    public function getVersion(): string
    {
        return "3.0";
    }

    public static function getSolutionVersion(): string
    {
        //code duplication from PackageVersionTrait... sorry
        $version = Versions::getVersion(self::PACKAGE_NAME);

        // normalizes v2.3.0@9e016f4898c464f5c895c17993416c551f1697d3 to 2.3.0
        $version = preg_replace('/^v/', '', $version);
        return preg_replace('/@(.+)$/', '', $version);

    }

    /**
     * Returns the composer package name used to resolve the version.
     *
     * @return string
     */
    protected function getComposerPackageName(): string
    {
        return self::PACKAGE_NAME;
    }

}