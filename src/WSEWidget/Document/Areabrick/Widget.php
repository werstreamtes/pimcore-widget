<?php

namespace App\Document\Areabrick;

use Pimcore\Extension\Document\Areabrick\AbstractTemplateAreabrick;
use Pimcore\Extension\Document\Areabrick\EditableDialogBoxConfiguration;
use Pimcore\Extension\Document\Areabrick\EditableDialogBoxInterface;
use Pimcore\Model\Document\Editable\Area\Info;

class Widget extends AbstractTemplateAreabrick implements EditableDialogBoxInterface
{

    /**
     * @return string
     */
    public function getName(): string
    {
        return "WerStreamt.es? Widget2";
    }

    /**
     * @param Info $info
     * @return void
     */
    public function action(Info $info)
    {
        // do stuff before the brick is rendered.
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return "Widget zum checken der Verfügbarkeit von Filmen und Serien";
    }

    /**
     * @return string
     */
    public function getTemplateLocation(): string
    {
        return static::TEMPLATE_LOCATION_GLOBAL;
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

    /**
     * @return bool
     */
    public function needsReload(): bool
    {
        return false;
    }

}
