<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);


//Outputs type and value by using a series of if/else if statements to determine type. 
//Extra PHP_EOLs are used for spacing speration
echo("Output types:" . PHP_EOL);
echo(PHP_EOL);
foreach ($things as $typeof) {
    //Strings
    if (is_string($typeof)) {
        echo($typeof . " Is a string." . PHP_EOL);
        echo(PHP_EOL);
    //Arrays
    }else if (is_array($typeof)) {
        echo($typeof . " Is an array." . PHP_EOL);
        echo(PHP_EOL);
    //Numerics --Ints --Floats
    }else if (is_numeric($typeof)) {
        if(is_int($typeof)) {
            echo($typeof . " is an int." . PHP_EOL);
            echo(PHP_EOL);
        }else if (is_float($typeof)) {
            echo($typeof . " is a float." . PHP_EOL);
            echo(PHP_EOL);
        }
    }else if (is_null($typeof)) {
        echo($typeof . " is null." . PHP_EOL);
        echo(PHP_EOL);
    }else if (is_bool($typeof)){
        echo($typeof . " is bool." . PHP_EOL);
        echo(PHP_EOL);
    }else {
        echo "error" . PHP_EOL;
    }
}
echo(PHP_EOL);
echo(PHP_EOL);
echo("Only scalar outputs below:" . PHP_EOL);
echo(PHP_EOL);
//Outputs only Scalar values
foreach ($things as $isScalar) {
    if (is_scalar($isScalar)) {
        echo($isScalar) . PHP_EOL;
    }
}

//Outputs all values, including arrays.
echo(PHP_EOL);
echo(PHP_EOL);
echo("All outputs below. Including arrays:" . PHP_EOL);
echo(PHP_EOL);
foreach ($things as $allPrint) {
    if (is_array($allPrint)) {
        echo "Array here:" . PHP_EOL;
        foreach ($allPrint as $allPrintArray) {
            echo($allPrintArray . PHP_EOL);
        }
        echo "End Array!" . PHP_EOL;
    } else {
        echo($allPrint . PHP_EOL);
    }
}