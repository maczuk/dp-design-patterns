<?php

declare(strict_types=1);

namespace DesignPatterns\Tank;

abstract class AbstractHeavyArmoredTank extends AbstractTank implements HeavyArmoredTankInterface
{
    public function acceptBullet(Bullet $bullet): void
    {
        $bullet->visitHeavyArmored($this);
    }
}
