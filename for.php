<?php

fwrite(STDOUT, 'Starting number? ');
$startingNum = trim(fgets(STDIN));

fwrite(STDOUT, 'Ending number? ');
$endingNum = trim(fgets(STDIN));

fwrite(STDOUT, 'Increment by? ');
$increment = trim(fgets(STDIN));


if (is_numeric($startingNum) and is_numeric($endingNum)) {
    if ($increment === "") {
        $increment = 1;     
    }
    else if (is_numeric($increment) == false) {
        echo "Error: Increment needs to be a number or blank for default of 1";
        exit(0);
    }
    for ($i = $startingNum; $i <= $endingNum; $i = $i + $increment) {
        echo($i . PHP_EOL);
    }
}else {
    echo "Error: Starting and/or ending numbers need to be actual numbers";
    exit(0);
}









