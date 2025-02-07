<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function sortAndSumArray($inputArray) {
        rsort($inputArray);
        
        $sum = array_sum($inputArray);
        
        echo "Sorted Array (Descending): ";
        print_r($inputArray);
        
        echo "Sum of elements: $sum";
    }

    $userInput = [10, 20, 5, 7, 30];
    sortAndSumArray($userInput);
    ?>

</body>
</html>