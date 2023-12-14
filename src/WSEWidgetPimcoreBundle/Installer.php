<?php

namespace WerStreamtEs\WSEWidgetPimcoreBundle;

use Doctrine\DBAL\Migrations\Version;
use Doctrine\DBAL\Schema\Schema;
use Pdchaudhary\LokaliseTranslateBundle\Migrations\Version20210829000000;
use Pdchaudhary\LokaliseTranslateBundle\Service\ProjectApiService;
use Pimcore\Extension\Bundle\Installer\SettingsStoreAwareInstaller;


class Installer extends SettingsStoreAwareInstaller
{

    public function install(): void
    {
        $projectApiService =  new ProjectApiService();
        $projectApiService->createProjectOnLokalise();
        parent::install();
    }

    public function uninstall(): void
    {
        $tables = [
            'localise_translate_document',
            'localise_translate_keys',
            'localise_keys',
            'localise_translate_object'
        ];
        foreach ($tables as $table) {
            $this->getDb()->query("DROP TABLE IF EXISTS " . $table);
        }

        parent::uninstall();
    }

    /**
     * {@inheritdoc}
     */
    public function needsReloadAfterInstall(): bool
    {
        return true;
    }

    /**
     * @return \Pimcore\Db\Connection|\Pimcore\Db\ConnectionInterface
     */
    protected function getDb(){
        return \Pimcore\Db::get();
    }



}