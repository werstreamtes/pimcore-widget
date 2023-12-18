<?php

declare(strict_types=1);

namespace WerStreamtEs\WidgetPimcoreBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Pimcore\Extension\Bundle\Traits\PackageVersionTrait;

class WidgetPimcoreBundle extends AbstractPimcoreBundle
{

    use PackageVersionTrait;

    protected function getComposerPackageName(): string
    {
        return 'werstreamtes/pimcore-widget';
    }
}
