<?php
require_once __DIR__ . '/Rectangle.php';
require_once __DIR__ . '/Square.php';

$area = new Rectangle(10, 5);
echo($area->area()) . PHP_EOL;


$perim = new Square(5, 5);
echo($perim->perimeter()) . PHP_EOL;
echo($perim->area()) . PHP_EOL;


?>