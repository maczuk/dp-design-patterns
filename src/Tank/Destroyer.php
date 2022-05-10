<?php

declare(strict_types=1);

namespace DesignPatterns\Tank;

final class Destroyer extends AbstractHeavyArmoredTank implements TankInterface, HeavyArmoredTankInterface
{
    protected int $health = 450;
    protected int $lightArmoredAttackPower = 15;
    protected int $heavyArmoredAttackPower = 40;

}
