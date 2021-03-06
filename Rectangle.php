<?php
class Rectangle
{
    private $height;
    private $width;

    public function setHeight($height)
    {
        $this->height=$height;
    }

    public function setWidth($width)
    {
        $this->width=$width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function area() 
    {
        echo "rectangle area" . PHP_EOL;
        return $this->height*$this->width;
    }

    public function perimeter()
    {
        echo "rectangle perimeter" . PHP_EOL;
        return ($this->height)*2+($this->width);
    }

    public function __construct($height, $width) 
    {
        $this->setHeight($height);
        $this->setWidth($width);
    }
}

?>