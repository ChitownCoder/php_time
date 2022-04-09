<?php

// Area of a rectangle that

$length = 10;

$width = 5;

$areaRectangle = $length * $width;

echo $areaRectangle = "The area of a rectangle with length = $length and width = $width is $areaRectangle";

// Area of Triangles

$base = 12;

$height = 3;

$areaTriangle = $base * $height / 2;

echo "<br>";

echo $areaTriangle;

// Area of a Circle


$radius = 5;

$pi = 3.14;

// $areaCircle = $pi * $radius * $radius; // this is one way to do it.
$areaCircle = $pi * pow($radius, 2); // this is another way to do it.

echo "<br>" . $areaCircle;

$areaCircle = pi() * pow($radius, 2);
echo "<br>" . $areaCircle;


// Area of a Trapezium.

$a = 10;

$b = 8;

$height = 4;

$area = ($a + $b) * $height / 2;

echo "<br>" . $area;
