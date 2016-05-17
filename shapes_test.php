<?php
require_once ('Square.php');

$rectangle1=new Rectangle(20, 10);
echo 'rectangle1' . ' area ' . $rectangle1->area() . PHP_EOL;

$rectangle2=new Rectangle(15, 10);
echo 'rectangle2' . ' area ' . $rectangle2->area() . PHP_EOL;

$square1=new Square(20);
echo 'square1' . ' perimeter ' . $square1->squarePerimeter() . PHP_EOL;
echo 'square1' . ' area ' . $square1->area() . PHP_EOL;

$square2=new Square(10);
echo 'square2' . ' area ' . $square2->area() . PHP_EOL;
echo 'square2' . ' perimeter ' . $square2->squarePerimeter() . PHP_EOL;

?>