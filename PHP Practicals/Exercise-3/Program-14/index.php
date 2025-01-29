<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class MathOperations {
    public function __call($name, $arguments) {
        if ($name == 'add') {
            return array_sum($arguments);
        } elseif ($name == 'subtract') {
            return array_shift($arguments) - array_sum($arguments);
        } elseif ($name == 'multiply') {
            return array_product($arguments);
        }
    }
}

$math = new MathOperations();
echo "Addition: " . $math->add(1, 2, 3, 4) . "\n";
echo "Subtraction: " . $math->subtract(10, 2, 3) . "\n";
echo "Multiplication: " . $math->multiply(2, 3, 4) . "\n";
?>
</body>
</html>