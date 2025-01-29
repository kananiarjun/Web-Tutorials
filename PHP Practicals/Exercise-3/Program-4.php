<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    function countWordOccurrences($paragraph) {
        
        $cleanedParagraph = strtolower(preg_replace("/[^\w\s]/", '', $paragraph));
        $words = explode(' ', $cleanedParagraph); 
        
        
        $wordCount = array_count_values($words);

        
        echo "<table border='1'>";
        echo "<tr><th>Word</th><th>Count</th></tr>";
        
        foreach ($wordCount as $word => $count) {
            echo "<tr><td>" . htmlspecialchars($word) . "</td><td>" . htmlspecialchars($count) . "</td></tr>";
        }
        
        echo "</table>";
    }

    
    countWordOccurrences("Hello world! Hello everyone. Welcome to the world of PHP.");
?>
</body>
</html>