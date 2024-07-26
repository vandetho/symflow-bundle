<?php
declare(strict_types=1);

namespace Vandetho\SymflowBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Vandetho\SymflowBundle\DependencyInjection\Compiler\RetrieveWorkflowPass;

/**
 * Class VandethoSymflowBundle
 *
 * @package Vandetho\SymflowBundle
 * @author  Vandeth THO <thovandeth@gmail.com>
 */
class VandethoSymflowBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return dirname(__DIR__);
    }

    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

        $container->addCompilerPass(new RetrieveWorkflowPass());
    }
}