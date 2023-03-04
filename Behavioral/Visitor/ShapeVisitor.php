<?php

// Define the ShapeVisitor class
class ShapeVisitor implements ShapeVisitorInterface
{
    private $area;
    private $perimeter;

    public function visitCircle(Circle $circle)
    {
        $this->area = pi() * $circle->getRadius() * $circle->getRadius();
        $this->perimeter = 2 * pi() * $circle->getRadius();
    }

    public function visitSquare(Square $square)
    {
        $this->area = $square->getLength() * $square->getLength();
        $this->perimeter = 4 * $square->getLength();
    }

    public function visitRectangle(Rectangle $rectangle)
    {
        $this->area = $rectangle->getWidth() * $rectangle->getHeight();
        $this->perimeter = 2 * ($rectangle->getWidth() + $rectangle->getHeight());
    }

    public function getArea()
    {
        return $this->area;
    }

    public function getPerimeter()
    {
        return $this->perimeter;
    }
}