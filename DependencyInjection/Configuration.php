<?php

namespace Luckyseven\Bundle\LuckysevenPaginationBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('luckyseven_pagination');

        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('default_size')->end()
                ->scalarNode('allowed_sizes')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
