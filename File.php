<?php
class File
{
    public $handle;
    public $msg;

    public function __construct($file) {
        $this->handle=fopen($file,"a");
    }

    public function append($msg) {
        $this->msg=$msg;
        fwrite($this->handle, $msg . PHP_EOL);
    }

    public function close() {
        fclose($this->handle);
    }


}

?>