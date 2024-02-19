<?php

namespace Pimcore\Bundle\WidgetBundle\Document\Areabrick;

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
        return 'Widget';
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'Mit dem Widget kannst du Verfügbarkeitsinformationen zu Filmen und Serien direkt auf deiner Webseite anzeigen.';
    }

    /**
     * @return mixed
     */
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
            'type' => 'tabpanel',
            'items' => [
                [
                    'type' => 'panel',
                    'title' => 'Einstellungen',
                    'items' => [
                        [
                            'type' => 'checkbox',
                            'name' => 'Disc',
                            'label' => 'DVD / Blu-ray anzeigen'
                        ],
                        [
                            'type' => 'checkbox',
                            'name' => 'TV',
                            'label' => 'TV anzeigen'
                        ],
                        [
                            'type' => 'checkbox',
                            'name' => 'Trailer',
                            'label' => 'Trailer anzeigen'
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
        // optional
        // here you can decide whether adding this bricks should trigger a reload
        // in the editing interface, this could be necessary in some cases. default=false
        return false;
    }
}
