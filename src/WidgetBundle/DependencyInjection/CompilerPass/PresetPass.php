<?php

namespace WidgetBundle\DependencyInjection\CompilerPass;

use WidgetBundle\Registry\PresetRegistry;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

final class PresetPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        $definition = $container->getDefinition(PresetRegistry::class);
        foreach ($container->findTaggedServiceIds('news.preset') as $id => $tags) {
            foreach ($tags as $attributes) {
                $definition->addMethodCall('register', [$attributes['alias'], new Reference($id)]);
            }
        }
    }
}