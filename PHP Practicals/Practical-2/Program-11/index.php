<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $original_string = " PHP programming is both simple and versatile. ";
        $trimmed_string = trim($original_string);
        $uppercase_string = strtoupper($trimmed_string);
        $word_count = str_word_count($trimmed_string);
        $position = stripos($uppercase_string, "SIMPLE");
        $repeated_string = str_repeat($trimmed_string . "\n", 3);
        echo "Original String: " . $original_string . "<br>";
        echo "Trimmed String: " . $trimmed_string . "<br>";
        echo "Uppercase String: " . $uppercase_string . "<br>";
        echo "Word Count: " . $word_count . "<br>";
        echo "Position of 'SIMPLE': " . ($position !== false ? $position : "Not Found") . "<br>";
        echo "Repeated String:<br>" . $repeated_string;
    ?>
</body>
</html>
