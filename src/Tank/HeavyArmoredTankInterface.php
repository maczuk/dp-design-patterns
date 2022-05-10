<?php

declare(strict_types=1);

namespace DesignPatterns\Tank;

interface HeavyArmoredTankInterface extends TankInterface
{
    public function acceptBullet(Bullet $bullet): void;
}
