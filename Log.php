<?PHP


class Log {
    public $filename;

    public function logMessage($logLevel, $message) {
        $this->filename = "txt/log-" . date("Y-m-d") . ".log"; 
        $handle = fopen($this->filename, 'a');
    
        $logLevel = date("Y-m-d") . " " . date("H:i:s") . " " . $logLevel;
        fwrite($handle, $logLevel . ": " . $message . PHP_EOL);
        fclose($handle);
    }  

    public function info($message) {
        $this->logMessage("INFO", $message);
    }
    public function error($message) {
        $this->logMessage("ERROR", $message); 

    }

      

}



?>
