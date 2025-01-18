<?php


$theme = 'light';
if (isset($_COOKIE['theme'])) {
    $theme = $_COOKIE['theme'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
    <link rel="stylesheet" href="<?php echo ($theme == 'dark') ? 'dark.css' : 'style.css'; ?>">
</head>
<body class="<?php echo $theme; ?>">
    <h1>This is Page 2</h1>
    <p>Your selected theme is: <?php echo ucfirst($theme); ?></p>
    <p>Return to the <a href="index.php">main page</a>.</p>
</body>
</html>
