<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start(); 


$valid_username = "arjun";
$valid_password = "123";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];


    
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username; 
        header("Location: welcome.php"); 
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>


</body>
</html>