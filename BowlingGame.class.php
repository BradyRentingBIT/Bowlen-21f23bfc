<?php

namespace bowling\BowlingGame;

require_once ('ScoreBoard.class.php');
use bowling\ScoreBoard\ScoreBoard;

class BowlingGame
{

    private ScoreBoard $scoreBoard;

	function __construct($players)
    {
        $this->scoreBoard = new ScoreBoard();
		$this->start($players);
	}

	public function start($players)
    {
        // We add our players here
       $this->scoreBoard->addPlayer($players);
	}
}