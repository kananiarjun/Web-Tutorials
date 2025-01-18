<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function generateFibonacci($n) { 
    $fibonacci = [];
     if ($n <= 0) {
        return $fibonacci;
    } elseif ($n == 1) {
        return [0]; // Return the first Fibonacci number
    } elseif ($n == 2) {
        return [0, 1]; // Return the first two Fibonacci numbers
    }
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;


    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci; // Return the generated Fibonacci sequence
}
$n = 10;
$fibNumbers = generateFibonacci($n);
echo "The first $n Fibonacci numbers are: " . implode(", ", $fibNumbers);
?>
</body>
</html>
