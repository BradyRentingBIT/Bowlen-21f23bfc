<?php

class Speler {

    private int $score = 0;
	private array $lastTwoThrows;
	private string $name;

	function __construct($name)
    {
		$this->name = $name;
	}

	function getName()
    {
		return $this->name;
	}

	function setScore($value)
    {
        return $this->score + $value;
	}

	function getScore()
    {
		return $this->score;
	}

	function setLastTwoThrows($throws)
    {
		$this->lastTwoThrows = [$throws];
	}

	function getLastTwoThrows()
    {
		return $this->lastTwoThrows;
	}
}