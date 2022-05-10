<?php

declare(strict_types=1);

namespace DesignPatterns;

use DesignPatterns\Tank\Bullet;
use DesignPatterns\Tank\Division;
use DesignPatterns\Tank\Hunter;
use DesignPatterns\Tank\Mammoth;
use DesignPatterns\Upgrade\HealthUpgrade;
use DesignPatterns\Upgrade\PowerUpgrade;
use DesignPatterns\Utils\TankPrinter;

final class Main
{
    public function run(): void
    {
//        $this->upgrade();

//        $this->damage();

        $this->division();
    }

    private function upgrade(): void
    {
        $printer = new TankPrinter();

        $hunter = new Hunter();
        $printer->print($hunter, 'Hunter Alpha');

        $hunter = new PowerUpgrade($hunter);
        $hunter = new HealthUpgrade($hunter);
        $hunter = new HealthUpgrade($hunter);
        $hunter = new HealthUpgrade($hunter);
        $printer->print($hunter, 'Hunter Alpha');
    }

    private function damage(): void
    {
        $printer = new TankPrinter();
        $hunter = new Hunter();
        $mammoth = new Mammoth();

        $printer->print($mammoth, 'Mammoth');
//        (new Bullet($hunter))->visitHeavyArmored($mammoth);
        $hunterBullet = new Bullet($hunter);
        $mammoth->acceptBullet($hunterBullet);
        $mammoth->acceptBullet($hunterBullet);
        $printer->print($mammoth, 'Mammoth');
    }

    private function division(): void
    {
        $printer = new TankPrinter();
        $division = new Division();

        $hunter1 = new Hunter();
        $hunter2 = new Hunter();
        $hunter3 = new Hunter();
        $mammoth = new Mammoth();

        $division->add($hunter1, $hunter2, $hunter3);

        $printer->print($mammoth, 'Mammoth');
        $hunter1->shoot($mammoth);
        $printer->print($mammoth,'Mammoth after shoot');

    }
}
