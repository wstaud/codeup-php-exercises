<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
// Create empty string to covert string into 
$physicistsArray = [];

//Function used to covernt string into array, put an and on the last term and sort if requested.
function humanizedList($physicistsString) {
    //convert the string into an array
    $physicistsArray = explode(', ', $physicistsString);
    //Add the and to the last therm here
    $finalName = array_pop($physicistsArray);
    $finalName = "and " . $finalName;
    array_push($physicistsArray, $finalName);
    //Ask user if they want to sort     
    fwrite(STDOUT, 'Sort? (y/n or yes/no) ');
    $answer = trim(fgets(STDIN));

    if($answer === "yes" || $answer === "y") {
        asort($physicistsArray);
    }
    //convert the array back into a string 
    $famousFakePhysicists = implode(', ', $physicistsArray);

    return $famousFakePhysicists;
}
//Call upon the function and pass the string to be converted
$famousFakePhysicists = humanizedList($physicistsString);
//Echo the sentence and add the new string created by the humanizedList function to the end.
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;
