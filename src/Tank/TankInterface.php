<?php

declare(strict_types=1);

namespace DesignPatterns\Tank;

interface TankInterface
{
    public function getHealth(): int;

    public function decreaseHealth(int $amount): void;

    public function getLightArmoredAttackPower(): int;

    public function getHeavyArmoredAttackPower(): int;

    public function acceptBullet(Bullet $bullet): void;

    public function setDivision(Division $division): void;

    public function shoot(TankInterface $aim): void;
}
