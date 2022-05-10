<?php

declare(strict_types=1);

namespace DesignPatterns\Tank;

final class Hunter extends AbstractLightArmoredTank implements TankInterface, LightArmoredTankInterface
{
    protected int $health = 100;
    protected int $lightArmoredAttackPower = 10;
    protected int $heavyArmoredAttackPower = 10;
}
