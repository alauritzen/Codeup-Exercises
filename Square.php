<?php
require_once 'Rectangle.php';

class Square extends Rectangle
{

    public function __construct($height)
    {
        parent::__construct($height, $height);
        // $this->width=$height;
    }

    public function squarePerimeter() 
    {
        if ($this->height != $this->width) 
        {
            return "This is not a square!";
        } else
        return ($this->height)*4; 
    }

}

?>