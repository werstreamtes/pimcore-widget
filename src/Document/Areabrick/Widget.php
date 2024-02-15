<?php

namespace Pimcore\Bundle\WidgetBundle\Document\Areabrick;

use Pimcore\Extension\Document\Areabrick\AbstractTemplateAreabrick;

class Widget extends AbstractTemplateAreabrick
{
    public function getName()
    {
        return 'Widget';
    }

    public function getDescription()
    {
        return 'Mit dem Widget kannst du Verfügbarkeitsinformationen zu Filmen und Serien direkt auf deiner Webseite anzeigen.';
    }

    public function getTemplateLocation()
    {
        return static::TEMPLATE_LOCATION_BUNDLE;
    }

    public function needsReload(): bool
    {
        // optional
        // here you can decide whether adding this bricks should trigger a reload
        // in the editing interface, this could be necessary in some cases. default=false
        return false;
    }
}
