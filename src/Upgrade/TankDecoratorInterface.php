<?php

declare(strict_types=1);

namespace DesignPatterns\Upgrade;

use DesignPatterns\Tank\TankInterface;

interface TankDecoratorInterface extends TankInterface
{
    public function __construct(TankInterface $tank);
}
