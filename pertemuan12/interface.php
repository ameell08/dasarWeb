<?php
    interface Shape{
        public function calculateArea();
    }

    interface Colour {
        public function getColour();
    }

    class Circle implements Shape, Colour{
        private $radius;
        private $colour;

        public function __construct($radius, $colour)        {
            $this->radius = $radius;
            $this->colour = $colour;
        }

        public function calculateArea()
        {
            return pi() * pow($this->radius, 2);
        }

        public function getColour(){
            return $this-> colour;
        }
    }

    $circle = new Circle(5, "Blue");

    echo "Area of Circle : " . $circle->calculateArea() . "<br>";
    echo "Area of Circle : " . $circle->getColour() . "<br>";
?>