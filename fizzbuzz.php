<?php

//Simple FizzBuzz app. Prints fizz if number is divisable by 3. Buzz if divisable by 5. Both if both divisable.
for ($i = 1; $i <= 100; $i++) {
    if (($i % 3 == 0) and ($i % 5 == 0)) {
        echo("FizzBuzz" . PHP_EOL);
    }else if ($i % 3 == 0) {
        echo("Fizz" . PHP_EOL);
    }else if ($i % 5 == 0) {
        echo("Buzz" . PHP_EOL);
    }else {
        echo($i . PHP_EOL);
    }

}