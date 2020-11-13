<?php


class CircleAdapter implements ICircle
{
    private $circle;

    public function __construct(CircleAreaLib $circle)
    {
        $this->circle = $circle;
    }

    function circleArea(float $circumference)
    {
        $diagonal = $circumference/M_PI;
        return $this->circle->getCircleArea($diagonal);
    }
}