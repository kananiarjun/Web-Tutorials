<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array1 = [1, 2, 3, 4, 5];
        $array2 = [4, 5, 6, 7, 8];

        $mergedArray = array_merge($array1, $array2);
        $uniqueArray = array_unique($mergedArray);
        sort($uniqueArray);

        echo "Merged and sorted array: ";
        print_r($uniqueArray);
    ?>
</body>
</html>