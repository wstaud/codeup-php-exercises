<?php


function logMessage($logLevel, $message)
{  
    $filename = 'txt/log.txt';
    $handle = fopen($filename, 'a');

    if(file_exists($filename)) {
        echo("it exists");
        $filename = "txt/log2" . date("Ymd") . ".txt"; 
    }

    fwrite($handle, PHP_EOL . $logLevel . ": " . $message);
    fclose($handle);
}


logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");

?>

//php.init
