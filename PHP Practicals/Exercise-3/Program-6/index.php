<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$library = [
    [
        "title" => "The Great Gatsby",
        "author" => "F. Scott Fitzgerald",
        "year" => 1925
    ],
    [
        "title" => "The Road",
        "author" => "Cormac McCarthy",
        "year" => 2006
    ],
    [
        "title" => "A Brief History of Time",
        "author" => "Stephen Hawking",
        "year" => 1988
    ],
    [
        "title" => "The Testaments",
        "author" => "Margaret Atwood",
        "year" => 2019
    ],
    [
        "title" => "Educated",
        "author" => "Tara Westover",
        "year" => 2018
    ]
];

echo "Books published after 2015:\n";
foreach ($library as $book) {
    if ($book["year"] > 2015) {
        echo "- Title: {$book['title']}\n";
        echo "  Author: {$book['author']}\n";
        echo "  Year: {$book['year']}\n\n"; 
    }
}
?>


</body>
</html>

