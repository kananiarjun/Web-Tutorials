<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $originalString = " PHP Rocks! ";
        $trimmedString = trim($originalString);
        $leftTrimmedString = ltrim($originalString);
        $rightTrimmedString = rtrim($originalString);
        echo "Original String: '{$originalString}'\n";
        echo "After trim: '{$trimmedString}'\n";
        echo "After ltrim: '{$leftTrimmedString}'\n";
        echo "After rtrim: '{$rightTrimmedString}'\n";
    ?>
</body>
</html>
