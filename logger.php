<?php


function logMessage($logLevel, $message)
{  
    $filename = "txt/log-" . date("Y-m-d") . ".log"; 
    $handle = fopen($filename, 'a');
    
    $logLevel = date("Y-m-d") . " " . date("H:i:s") . " " . $logLevel;
    fwrite($handle, PHP_EOL . $logLevel . ": " . $message);
    fclose($handle);

}


logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");

?>

