<?php
require_once ('Rectangle.php');
require_once ('Square.php');

$rectangle1=new Rectangle(20, 10);
echo $rectangle1->area() . PHP_EOL;

$rectangle2=new Rectangle(15, 10);
echo $rectangle2->area() . PHP_EOL;

$square1=new Square(20, 30);
echo $square1->squarePerimeter() . PHP_EOL;

$square2=new Square(20, 20);
echo $square2->squarePerimeter() . PHP_EOL;

?>