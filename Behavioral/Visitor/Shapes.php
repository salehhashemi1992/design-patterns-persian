<?php

// Define the Circle class
class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function accept(ShapeVisitorInterface $visitor)
    {
        $visitor->visitCircle($this);
    }

    public function getRadius()
    {
        return $this->radius;
    }
}

// Define the Square class
class Square implements Shape
{
    private $length;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function accept(ShapeVisitorInterface $visitor)
    {
        $visitor->visitSquare($this);
    }

    public function getLength()
    {
        return $this->length;
    }
}

// Define the Rectangle class
class Rectangle implements Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function accept(ShapeVisitorInterface $visitor)
    {
        $visitor->visitRectangle($this);
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }
}