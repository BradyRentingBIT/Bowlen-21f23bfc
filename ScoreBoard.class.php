<?php

namespace bowling\ScoreBoard;

class ScoreBoard {

    private array $players = [];

	public function addPlayer($player)
    {
		$this->players = [$player];
	} 

	public function getCurrentPlayer()
    {
		return $this->players;
	}

	public function registerPinsDown($pins)
    {
		// TODO
	}

	public function printStatus()
    {
		// TODO
	}

	public function getWinner()
    {
		// TODO
	}
}