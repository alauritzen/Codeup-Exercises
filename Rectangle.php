<?php
class Rectangle
{
    protected $height;
    protected $width;

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
        $this->height=$height;
        $this->width=$width;
    }
}

?>