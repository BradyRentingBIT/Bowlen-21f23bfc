<?php

namespace bowling;

require_once ('BowlingGame.class.php');
use bowling\BowlingGame\BowlingGame;

class Bowling
{

    public function createGame()
    {
        // Enter names separated by commas
        $players = readline("Welcome to the bowling game! Please enter your players:" . PHP_EOL);

        if (empty($players) || is_numeric($players) ) {
            echo "Invalid input, try again" . PHP_EOL;
            self::createGame();
        }

        $players = explode(',', $players);
        new BowlingGame($players);
    }

}

$bowling = new Bowling();
$bowling->createGame();