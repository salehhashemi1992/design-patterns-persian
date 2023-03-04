<?php

// Example usage
$shapes = [
    new Circle(5),
    new Square(4),
    new Rectangle(3, 6),
];

// Create a new instance of the ShapeVisitor class
$visitor = new ShapeVisitor();

// Loop through each shape and call its accept() method, passing in the visitor object
foreach ($shapes as $shape) {
    $shape->accept($visitor);

    echo get_class($shape) . " area is: " . $visitor->getArea() . ", perimeter is: " . $visitor->getPerimeter() . "\n";
}