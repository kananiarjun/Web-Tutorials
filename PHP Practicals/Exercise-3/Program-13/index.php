<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Vehicle {
        public $make;
        public $model;

        public function __construct($make, $model) {
            $this->make = $make;
            $this->model = $model;
        }

        public function displayInfo() {
            echo "Make: " . $this->make . "\n";
            echo "Model: " . $this->model . "\n";
        }
    }

    class Car extends Vehicle {
        public $fuelType;

        public function __construct($make, $model, $fuelType) {
            parent::__construct($make, $model);
            $this->fuelType = $fuelType;
        }

        public function displayInfo() {
            parent::displayInfo();
            echo "Fuel Type: " . $this->fuelType . "\n";
        }
    }

    $car1 = new Car("Toyota", "Glanza", "Petrol");
    $car1->displayInfo();
    ?>
</body>
</html>