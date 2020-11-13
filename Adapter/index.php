<?php

require_once 'import_libs/CircleAreaLib.php';
require_once 'import_libs/SquareAreaLib.php';

require_once 'square/ISquare.php';
require_once 'square/SquareAdapter.php';

require_once 'circle/ICircle.php';
require_once 'circle/CircleAdapter.php';

$square = new SquareAdapter(new SquareAreaLib());
echo $square->squareArea(5) . PHP_EOL;

$circle = new CircleAdapter(new CircleAreaLib());
echo $circle->circleArea(5) . PHP_EOL;
