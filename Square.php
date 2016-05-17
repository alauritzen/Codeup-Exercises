<?php
require_once 'Rectangle.php';

class Square extends Rectangle
{

    public function __construct($height)
    {
        parent::__construct($height, $height);
        // $this->width=$height;
    }

    public function perimeter() 
    {
        if ($this->height != $this->width) 
        {
            return "This is not a square!";
        } else
        echo "square perimeter" . PHP_EOL;
        return ($this->height)*4; 
    }

    public function area() 
    {
        if ($this->height != $this->width) 
        {
            return "This is not a square!";
        } else
        echo "square area" . PHP_EOL;
        return $this->height*$this->height;
    }

}

?>