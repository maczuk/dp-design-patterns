<?php

declare(strict_types=1);

namespace DesignPatterns\Tank;

abstract class AbstractTank implements TankInterface
{
    protected int $health;
    protected int $lightArmoredAttackPower;
    protected int $heavyArmoredAttackPower;

    public function getHealth(): int
    {
        return $this->health;
    }

    public function decreaseHealth(int $amount): void
    {
        $this->health -= $amount;
    }

    public function getLightArmoredAttackPower(): int
    {
        return $this->lightArmoredAttackPower;
    }

    public function getHeavyArmoredAttackPower(): int
    {
        return $this->heavyArmoredAttackPower;
    }
}
