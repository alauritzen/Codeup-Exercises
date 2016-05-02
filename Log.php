<?php
class Log
{
    public $filename;
    public $handle;
    public $time;
    public $today;

    public function __construct($prefix = "abc-") {
        
        $date_default_timezone_set="America/Chicago";
        $this->today=date("Y-m-d");
        $this->time=date("h:i:s:");
        $this->filename=$prefix . $this->today . ".log";
        $this->handle=fopen($this->filename, "a");
        
    }

    public function __destruct() {
        fclose($this->handle);
    }

    public function logMessage($logLevel, $message) {
        fwrite($this->handle, $this->today . " " . $this->time . " " . $logLevel . " " . $message . PHP_EOL);
    }

    public function info() {
        $logLevel="INFO";
        $message="This is an info message.";
        $this->logMessage($logLevel, $message);
    }

    public function error() {
        $logLevel="ERROR";
        $message="This is an error message.";
        $this->logMessage($logLevel, $message);
    }

}

?>