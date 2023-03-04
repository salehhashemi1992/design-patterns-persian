<?php

// Define the Shape interface
interface Shape
{
    public function accept(ShapeVisitorInterface $visitor);
}