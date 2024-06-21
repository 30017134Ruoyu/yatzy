<?php

namespace Yatzy\Test;

use Yatzy\YatzyGame;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../bootstrap.php';

class YatzyGameTest extends TestCase
{
    public function testInitialState()
    {
        $game = new YatzyGame();
        $this->assertEquals(0, $game->rollNumber);
        $this->assertEquals([0, 0, 0, 0, 0], $game->diceValues);
        $this->assertEquals([false, false, false, false, false], $game->keepDice);
    }

}
