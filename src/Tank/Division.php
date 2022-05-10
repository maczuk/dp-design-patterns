<?php

declare(strict_types=1);

namespace DesignPatterns\Tank;

final class Division
{
    /**
     * @var TankInterface[]
     */
    private array $tanks = [];

    public function add(TankInterface ...$tanks): void
    {
        foreach ($tanks as $tank) {
            $tank->setDivision($this);
            $this->tanks[] = $tank;
        }
    }

    public function shoot(TankInterface $attacker, TankInterface $aim): void
    {
        foreach ($this->tanks as $tank) {
            if ($tank !== $attacker) {
                $aim->acceptBullet(new Bullet($tank));
            }
        }
    }
}
