<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    abstract class Shape {
        abstract public function calculateArea();
    }

    class Circle extends Shape {
        private $radius;

        public function __construct($radius) {
            $this->radius = $radius;
        }

        public function calculateArea() {
            return pi() * pow($this->radius, 2);
        }
    }

    class Rectangle extends Shape {
        private $width;
        private $height;

        public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }

        public function calculateArea() {
            return $this->width * $this->height;
        }
    }

    $circle = new Circle(5);
    $rectangle = new Rectangle(4, 7);

    echo "Circle Area: " . $circle->calculateArea() . "\n";
    echo "Rectangle Area: " . $rectangle->calculateArea() . "\n";
    ?>
</body>
</html>