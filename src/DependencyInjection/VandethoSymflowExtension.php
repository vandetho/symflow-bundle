<?php
declare(strict_types=1);

namespace Vandetho\SymflowBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

/**
 * Class VandethoSymflowExtension
 *
 * @package Vandetho\SymflowBundle\DependencyInjection
 * @author  Vandeth THO <thovandeth@gmail.com>
 *
 * @internal
 */
final class VandethoSymflowExtension extends Extension
{

    public function load(array $configs, ContainerBuilder $container)
    {
        $processor = new Processor();
        $configuration = new Configuration();

        $config = $processor->processConfiguration($configuration, $configs);

        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
    }
}