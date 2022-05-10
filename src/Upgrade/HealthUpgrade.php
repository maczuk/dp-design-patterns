<?php

declare(strict_types=1);

namespace DesignPatterns\Upgrade;

final class HealthUpgrade extends AbstractTankDecorator implements TankDecoratorInterface
{
    public function getHealth(): int
    {
        return $this->tank->getHealth() + 1;
    }
}
