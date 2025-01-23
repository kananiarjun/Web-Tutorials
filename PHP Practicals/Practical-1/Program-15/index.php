<?php


$theme = 'light';


if (isset($_POST['theme'])) {
    $theme = $_POST['theme'];
    setcookie("theme", $theme, time() + (86400 * 30), "/");
} elseif (isset($_COOKIE['theme'])) {
    $theme = $_COOKIE['theme'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme Selector</title>
    <link rel="stylesheet" href="<?php echo ($theme == 'dark') ? 'dark.css' : 'style.css'; ?>">
</head>
<body class="<?php echo $theme; ?>">
    <h1>Select a Theme</h1>
    <form method="post">
        <select name="theme" id="theme" onchange="this.form.submit()">
            <option value="light" <?php if ($theme == 'light') echo 'selected'; ?>>Light</option>
            <option value="dark" <?php if ($theme == 'dark') echo 'selected'; ?>>Dark</option>
        </select>
    </form>
    <p>Go to <a href="page2.php">Page 2</a> to see the selected theme in action.</p>
</body>
</html>


