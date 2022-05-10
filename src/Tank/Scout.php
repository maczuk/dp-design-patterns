<?php

declare(strict_types=1);

namespace DesignPatterns\Tank;

final class Scout extends AbstractLightArmoredTank implements TankInterface, LightArmoredTankInterface
{
    protected int $health = 75;
    protected int $lightArmoredAttackPower = 10;
    protected int $heavyArmoredAttackPower = 5;
}
