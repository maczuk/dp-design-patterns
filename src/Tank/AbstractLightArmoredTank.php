<?php

declare(strict_types=1);

namespace DesignPatterns\Tank;

abstract class AbstractLightArmoredTank extends AbstractTank implements LightArmoredTankInterface
{
    public function acceptBullet(Bullet $bullet): void
    {
        $bullet->visitLightArmored($this);
    }
}
