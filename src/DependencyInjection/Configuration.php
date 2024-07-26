<?php
declare(strict_types=1);

namespace Vandetho\SymflowBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package Vandetho\SymflowBundle\DependencyInjection
 * @author  Vandeth THO <thovandeth@gmail.com>
 */
final class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('sym_flow');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->scalarNode('workflow_token')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end();

        return $treeBuilder;
    }
}