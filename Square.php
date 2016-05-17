<?php
require_once 'Rectangle.php';

class Square extends Rectangle
{

    // public function setHeight($height)
    // {
    //     $this->height=$height;
    // }

    public function __construct($height)
    {
        parent::__construct($height, $height);
        // $this->setHeight($height);
    }


    public function perimeter() 
    {
        echo "square perimeter" . PHP_EOL;
        return $this->getHeight()*4; 
    }

    public function area() 
    {
        echo "square area" . PHP_EOL;
        return pow($this->getHeight(), 2);
    }

}

?>