<?php
if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
} else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        setcookie('username', $username, time() + 3600);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Greeting</title>
</head>
<body>
    <?php if (isset($username)): ?>
        <h1>Hello, <?php echo $username; ?>!</h1>
    <?php else: ?>
        <form method="post">
            <input type="text" name="username" placeholder="Enter your name" required>
            <button type="submit">Submit</button>
        </form>
    <?php endif; ?>
</body>
</html>
