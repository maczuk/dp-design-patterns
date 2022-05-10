<?php

declare(strict_types=1);

namespace DesignPatterns\Tank;

final class Bullet
{
    private TankInterface $attacker;

    public function __construct(TankInterface $attacker)
    {
        $this->attacker = $attacker;
    }

    public function visitLightArmored(LightArmoredTankInterface $tank): void
    {
        $tank->decreaseHealth($this->attacker->getLightArmoredAttackPower());
    }

    public function visitHeavyArmored(HeavyArmoredTankInterface $tank): void
    {
        $tank->decreaseHealth($this->attacker->getHeavyArmoredAttackPower());
    }
}
