<?php

namespace WidgetBundle\Tool;

use PackageVersions\Versions;
use Pimcore\Extension\Bundle\Installer\SettingsStoreAwareInstaller;
use Pimcore\Tool;
use Pimcore\Model\User;
use Pimcore\Model\DataObject;
use Pimcore\Model\Translation;
use Pimcore\Model\Staticroute;
use Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver;
use Symfony\Component\Filesystem\Filesystem;
use WidgetBundle\WidgetBundle;
use WidgetBundle\Configuration\Configuration;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Yaml\Yaml;

class Install extends SettingsStoreAwareInstaller
{
    protected TokenStorageUserResolver $resolver;
    private SerializerInterface $serializer;
    private string $installSourcesPath;
    private Filesystem $fileSystem;

    private array $classes = [
        'NewsEntry',
        'NewsCategory',
    ];

    private string $currentVersion;

    public function setTokenStorageUserResolver(TokenStorageUserResolver $resolver): void
    {
        $this->resolver = $resolver;
    }

    public function setSerializer(SerializerInterface $serializer): void
    {
        $this->serializer = $serializer;
    }

    public function install(): void
    {
        $this->installSourcesPath = __DIR__ . '/../Resources/install';
        $this->fileSystem = new Filesystem();
        if (class_exists(Versions::class)) {
            $this->currentVersion = Versions::getVersion(WidgetBundle::PACKAGE_NAME);
        } else {
            $this->currentVersion = '';
        }

        $this->installOrUpdateConfigFile();

        parent::install();
    }

    private function installOrUpdateConfigFile(): void
    {
        if (!$this->fileSystem->exists(Configuration::SYSTEM_CONFIG_DIR_PATH)) {
            $this->fileSystem->mkdir(Configuration::SYSTEM_CONFIG_DIR_PATH);
        }

        $config = ['version' => $this->currentVersion];
        $yml = Yaml::dump($config);
        file_put_contents(Configuration::SYSTEM_CONFIG_FILE_PATH, $yml);
    }

    protected function getUserId(): int
    {
        $userId = 0;
        $user = $this->resolver->getUser();
        if ($user instanceof User) {
            $userId = $this->resolver->getUser()->getId();
        }

        return $userId;
    }
}
