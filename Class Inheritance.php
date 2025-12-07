<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1: Class Inheritance</title>
</head>
<body>
    <?php
        abstract class GeometricShape{
            abstract public function shapeArea();
        }

        class Circle extends GeometricShape{
            private $radius = 0;
            public function __construct($radius){
                $this->radius = $radius;
            }

            public function shapeArea(){
                echo number_format($this->radius * $this->radius * pi(),2,'.','') ;
                echo "<br>";
            }
        }

        class Rectangle extends GeometricShape{
            private $length = 0;
            private $width = 0;

            public function __construct($length, $width){
                $this->length = $length;
                $this->width = $width; 
            }

            public function shapeArea(){
                echo $this->length * $this->width;
                echo "<br>";
            }
        }

        class Rhombus extends GeometricShape{
            private $diagonal1 = 0;
            private $diagonal2 = 0;

            public function __construct($diagonal1, $diagonal2){
                $this->diagonal1 = $diagonal1;
                $this->diagonal2 = $diagonal2;
            }

            public function shapeArea(){
                echo $this->diagonal1 * $this->diagonal2 * 0.5;
                echo "<br>";
            }
        }

        $circle = new Circle(5);
        echo "Circle Area: ";
        $circle->shapeArea();

        $rectangle = new Rectangle(25,17);
        echo "Rectangle Area: ";
        $rectangle->shapeArea();

        $rhombus = new Rhombus(10,16);
        echo "Rhombus Area: ";
        $rhombus->shapeArea();
    ?>
</body>
</html>