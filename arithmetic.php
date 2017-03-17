<?php

function add($a, $b)
{
    echo($a + $b) . PHP_EOL;;
}

function subtract($a, $b)
{
    echo($a - $b) . PHP_EOL;;
}

function multiply($a, $b)
{
    echo($a * $b) . PHP_EOL;;
}

function divide($a, $b)
{
    echo($a / $b) . PHP_EOL;;
}

echo("1: for add") . PHP_EOL;
echo("2: for subtract") . PHP_EOL;
echo("3: for multiply") . PHP_EOL;
echo("4: for divide") . PHP_EOL;
(int) $operation = trim(fgets(STDIN));

fwrite(STDOUT, "First number? ");
$a = trim(fgets(STDIN));

fwrite(STDOUT, "Second number? ");
$b = trim(fgets(STDIN));


if($operation == 1) {
    add($a, $b);
}else if ($operation == 2) {
    subtract($a, $b);
}else if ($operation == 3) {
    multiply($a, $b);
}else if ($operation == 4) {
    divide($a, $b);
}


