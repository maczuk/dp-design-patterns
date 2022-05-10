<?php

declare(strict_types=1);

namespace DesignPatterns\Upgrade;

final class PowerUpgrade extends AbstractTankDecorator implements TankDecoratorInterface
{
    public function getLightArmoredAttackPower(): int
    {
        return $this->tank->getLightArmoredAttackPower() + 1;
    }

    public function getHeavyArmoredAttackPower(): int
    {
        return $this->tank->getHeavyArmoredAttackPower() + 1;
    }
}
