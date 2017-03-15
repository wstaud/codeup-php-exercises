<?php
//Ask user for starting number and assign
fwrite(STDOUT, 'Starting number? ');
$startingNum = trim(fgets(STDIN));
//Ask user for ending number and assign
fwrite(STDOUT, 'Ending number? ');
$endingNum = trim(fgets(STDIN));
//Ask user for increment by and assign
fwrite(STDOUT, 'Increment by? (Press enter for default of 1) ');
$increment = trim(fgets(STDIN));

//Check if numbers are numeric. If not, print error and kill. If so, check increment is numeric or blank. If not, print error and kill 
//If increment is blank, default is 1
if (is_numeric($startingNum) && is_numeric($endingNum)) {
    if ($increment === "") {
        $increment = 1;     
    }
    else if (is_numeric($increment) == false || $increment == 0) {
        echo "Error: Increment needs to be a number (higher than 0) or blank for default of 1" . PHP_EOL;
        exit(0);
    }
    for ($i = $startingNum; $i <= $endingNum; $i = $i + $increment) {
        echo($i . PHP_EOL);
    }
}else {
    echo "Error: Starting and/or ending numbers need to be actual numbers" .PHP_EOL;
    exit(0);
}









