<?php
namespace Yatzy;

class YatzyGame
{
    public $rollNumber;
    public $diceValues;
    public $keepDice;

    public function __construct()
    {
        $this->rollNumber = 0;
        $this->diceValues = [0, 0, 0, 0, 0];
        $this->keepDice = [false, false, false, false, false];
    }

    public function rollDice()
    {
        $dice = new Dice();
        for ($i = 0; $i < 5; $i++) {
            if (!$this->keepDice[$i]) {
                $this->diceValues[$i] = $dice->roll();
            }
        }
        $this->rollNumber++;
    }

    public function keep($index)
    {
        $this->keepDice[$index] = true;
    }

    public function release($index)
    {
        $this->keepDice[$index] = false;
    }
}
