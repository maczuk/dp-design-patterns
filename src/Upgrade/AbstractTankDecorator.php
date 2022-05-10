<?php

declare(strict_types=1);

namespace DesignPatterns\Upgrade;

use DesignPatterns\Tank\TankInterface;

abstract class AbstractTankDecorator implements TankDecoratorInterface
{
    protected TankInterface $tank;

    public function __construct(TankInterface $tank)
    {
        $this->tank = $tank;
    }

    public function getHealth(): int
    {
        return $this->tank->getHealth();
    }

    public function getLightArmoredAttackPower(): int
    {
        return $this->tank->getLightArmoredAttackPower();
    }

    public function getHeavyArmoredAttackPower(): int
    {
        return $this->tank->getHeavyArmoredAttackPower();
    }
}
