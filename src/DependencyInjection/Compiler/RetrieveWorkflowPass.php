<?php

declare(strict_types=1);

namespace Vandetho\SymflowBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

class RetrieveWorkflowPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        // in this method you can manipulate the service container:
        // for example, changing some container service:
        $workflowToken = $container->getParameter('workflow.token');
        // or processing tagged services:
        foreach ($container->findTaggedServiceIds('some_tag') as $id => $tags) {
        }
    }
}
