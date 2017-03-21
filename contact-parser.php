<?php

function parseContacts($filename)
{
    $contacts = array();
    $result = array();

    // todo - read file and parse contacts
    $filename = "contacts.txt";
    $handle = fopen($filename, "r");
    $contents = fread($handle, filesize($filename));
    $contents = trim($contents);
    $contacts = explode("\n", $contents);
    
    foreach($contacts as $contact) {
        $tempArray = explode("|", $contact);
        $num1 = substr($tempArray[1], 0, 3); 
        $num2 = substr($tempArray[1], 3, 3); 
        $num3 = substr($tempArray[1], 6, 4);
        $tempArray[1] = $num1 . "-" . $num2 . "-" . $num3;
        
        $result[] = array("name"    => $tempArray[0],
                          "number" => $tempArray[1]);
    }


    fclose($handle);
    return $result;
}

var_dump(parseContacts('contacts.txt'));

