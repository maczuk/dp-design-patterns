<?php

declare(strict_types=1);

namespace DesignPatterns\Tank;

interface LightArmoredTankInterface extends TankInterface
{
    public function acceptBullet(Bullet $bullet): void;
}
