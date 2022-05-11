<?php

declare(strict_types=1);

namespace DesignPatterns\Upgrade;

use DesignPatterns\Tank\Bullet;
use DesignPatterns\Tank\Division;
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

    public function decreaseHealth(int $amount): void
    {
        $this->tank->decreaseHealth($amount);
    }

    public function acceptBullet(Bullet $bullet): void
    {
        $this->tank->acceptBullet($bullet);
    }

    public function setDivision(Division $division): void
    {
        $this->tank->setDivision($division);
    }

    public function shoot(TankInterface $aim): void
    {
        $this->tank->shoot($aim);
    }
}
