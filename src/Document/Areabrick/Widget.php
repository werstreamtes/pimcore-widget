<?php

namespace Pimcore\Bundle\WidgetBundle\Document\Areabrick;

use Pimcore\Extension\Document\Areabrick\AbstractTemplateAreabrick;
use Pimcore\Extension\Document\Areabrick\EditableDialogBoxConfiguration;
use Pimcore\Extension\Document\Areabrick\EditableDialogBoxInterface;
use Pimcore\Model\Document\Editable\Area\Info;

class Widget extends AbstractTemplateAreabrick implements EditableDialogBoxInterface
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

    /**
     * @param $area
     * @param $info
     * @return EditableDialogBoxConfiguration
     */
    public function getEditableDialogBoxConfiguration($area, $info): EditableDialogBoxConfiguration
    {

        $config = new EditableDialogBoxConfiguration();
        $config->setWidth(240);
        $config->setHeight(250);

        $config->setItems([
            "type" => "tabpanel",
            "items" => [
                [
                    "type" => "panel",
                    "title" => "Einstellungen",
                    "items" => [
                        [
                            "type" => "checkbox",
                            "name" => "Disc",
                            "label" => "DVD / Blu-ray anzeigen"
                        ],
                        [
                            "type" => "checkbox",
                            "name" => "TV",
                            "label" => "TV anzeigen"
                        ],
                        [
                            "type" => "checkbox",
                            "name" => "Trailer",
                            "label" => "Trailer anzeigen"
                        ]
                    ]
                ]
            ]
        ]);

        return $config;

    }

    public function needsReload(): bool
    {
        // optional
        // here you can decide whether adding this bricks should trigger a reload
        // in the editing interface, this could be necessary in some cases. default=false
        return false;
    }
}
