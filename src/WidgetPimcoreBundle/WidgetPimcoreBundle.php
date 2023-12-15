<?php

namespace WerStreamtEs\WSEWidgetPimcoreBundle;
use Pimcore\Extension\Bundle\AbstractPimcoreBundle;

class WidgetPimcoreBundle extends AbstractPimcoreBundle
{
    public function getJsPaths()
    {
        return [
        ];
    }

    public function getNiceName()
    {
        return 'WerStreamt.es Widget Pimcore Bundle';
    }


    public function getEditmodeJsPaths(){
        return [
        ];
    }

    public function getCssPaths()
    {
        return [
        ];
    }

    public function getVersion(){
        return "1.0";
    }
}