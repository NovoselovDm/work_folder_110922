<?php
class Rectangle extends GeometryFigure
{
    public function __construct()
    {
        $this->name = 'Треугольник';
    }

    public function getArea(): float
    {
        return parent::getArea(); // TODO: Change the autogenerated stub
    }

    public function getPerimeter(): float
    {
        return parent::getPerimeter(); // TODO: Change the autogenerated stub
    }
}