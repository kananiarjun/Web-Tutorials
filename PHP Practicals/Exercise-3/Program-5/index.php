<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $students = [
            "Alice" => 85,
            "Bob" => 78,
            "Charlie" => 92,
            "David" => 88,
            "Eva" => 75
        ];

        $totalMarks = array_sum($students);
        $numberOfStudents = count($students);
        $averageMarks = $totalMarks / $numberOfStudents;

        echo "Average Marks: " . $averageMarks;
    ?>

</body>
</html>