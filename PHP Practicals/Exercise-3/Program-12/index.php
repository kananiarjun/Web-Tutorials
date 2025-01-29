<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Employee {
        public $name;
        public $designation;
        public $salary;

        public function __construct($name, $designation, $salary) {
            $this->name = $name;
            $this->designation = $designation;
            $this->salary = $salary;
        }

        public function displayDetails() {
            echo "Name: " . $this->name . "\n";
            echo "Designation: " . $this->designation . "\n";
            echo "Salary: $" . $this->salary . "\n";
        }
    }

    $employee1 = new Employee("Alice", "Manager", 75000);
    $employee2 = new Employee("Bob", "Developer", 60000);
    $employee3 = new Employee("Charlie", "Designer", 50000);

    $employee1->displayDetails();
    $employee2->displayDetails();
    $employee3->displayDetails();
    ?>
</body>
</html>