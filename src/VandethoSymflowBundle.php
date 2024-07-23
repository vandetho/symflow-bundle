<?php
declare(strict_types=1);

namespace Vandetho\SymflowBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

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
}