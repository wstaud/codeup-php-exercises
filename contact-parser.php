<?php

function parseContacts($filename)
{       
    //Empty arrays to be added to
    $contacts = array();
    $result = array();
    
    //Grab contacts.txt, open, asign size, trim it's contents and turn it into an array
    $filename = "contacts.txt";
    $handle = fopen($filename, "r");
    $contents = fread($handle, filesize($filename));
    $contents = trim($contents);
    $contacts = explode("\n", $contents);
    fclose($handle);

    //Takes the contacts array, seperates it further, turns the number into phone number format, and turns the array into a multi-dim array 
    foreach($contacts as $contact) {
        $tempArray = explode("|", $contact);
        $num1 = substr($tempArray[1], 0, 3); 
        $num2 = substr($tempArray[1], 3, 3); 
        $num3 = substr($tempArray[1], 6, 4);
        $tempArray[1] = $num1 . "-" . $num2 . "-" . $num3;
        
        $result[] = array("name"    => $tempArray[0],
                          "number" => $tempArray[1]);
    }

    //close the handle and return the result
        return $result;
}
//run contacts.txt through the parseContacts function and dump the return
var_dump(parseContacts('contacts.txt'));

