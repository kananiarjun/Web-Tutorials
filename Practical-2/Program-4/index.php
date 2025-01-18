<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sentence = "Never stop learning PHP; it’s a lifelong journey to learn more.";
        $word = "learn";
        $position = strpos($sentence, $word);
        if ($position !== false) {
            echo "The word '" . $word . "' is first found at position: " . $position . "<br>";
        } else {
            echo "The word '" . $word . "' was not found in the sentence";
        }
    ?>


</body>
</html>
