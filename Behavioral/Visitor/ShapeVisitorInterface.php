<?php

// Define the ShapeVisitor interface
interface ShapeVisitorInterface
{
    public function visitCircle(Circle $circle);

    public function visitSquare(Square $square);

    public function visitRectangle(Rectangle $rectangle);
}