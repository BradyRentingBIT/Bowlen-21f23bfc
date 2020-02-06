<?php

class Bowling
{

    public function createGame()
    {
        $players = readline("Welcome to the bowling game! Please enter your players:" . PHP_EOL);

        if (empty($players) || is_numeric($players) ) {
            echo "Invalid input, try again" . PHP_EOL;
            self::createGame();
        }
    }

}

$bowling = new Bowling();
$bowling->createGame();