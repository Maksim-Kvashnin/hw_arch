<?php


class SquareAdapter implements ISquare
{
    private $square;

    public function __construct(SquareAreaLib $square)
    {
        $this->square = $square;
    }

    function squareArea(float $sideSquare)
    {
        $diagonal = sqrt(2 * ($sideSquare**2));
        return $this->square->getSquareArea($diagonal);
    }
}