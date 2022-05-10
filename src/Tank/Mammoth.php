<?php

declare(strict_types=1);

namespace DesignPatterns\Tank;

final class Mammoth extends AbstractHeavyArmoredTank implements TankInterface, HeavyArmoredTankInterface
{
    protected int $health = 200;
    protected int $lightArmoredAttackPower = 20;
    protected int $heavyArmoredAttackPower = 25;
}
