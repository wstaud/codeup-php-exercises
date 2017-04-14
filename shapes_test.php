<?php
require_once __DIR__ . '/Rectangle.php';
require_once __DIR__ . '/Square.php';

$area = new Rectangle(10, 5);
echo("Rectangle perimeter: " . $area->perimeter()) . PHP_EOL;
echo("Rectangle Area: " . $area->area()) . PHP_EOL;


$perim = new Square(5, 5);
echo("Square perimeter: " . $perim->perimeter()) . PHP_EOL;
echo("Square area: " . $perim->area()) . PHP_EOL;


?>