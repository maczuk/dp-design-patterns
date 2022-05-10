<?php

declare(strict_types=1);

namespace DesignPatterns\Utils;

use DesignPatterns\Tank\TankInterface;

final class TankPrinter
{
    public function print(TankInterface $tank, string $name): void
    {
        $this->writeln(sprintf('>>--%s-->>', $name));
        $this->writeln(sprintf('health: %s', $tank->getHealth()));
        $this->writeln(sprintf('light armored attack power: %s', $tank->getLightArmoredAttackPower()));
        $this->writeln(sprintf('heavy armored attack power: %s', $tank->getHeavyArmoredAttackPower()));
        $this->writeln(sprintf('<<--%s--<<', $name));
    }

    private function writeln(string $string): void
    {
        echo $string."\n";
    }
}
