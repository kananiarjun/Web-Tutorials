<?php
if (isset($_COOKIE['visit_count'])) {
    $visit_count = $_COOKIE['visit_count'] + 1;
} else {
    $visit_count = 1;
}
setcookie('visit_count', $visit_count, time() + 3600);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Visit Counter</title>
</head>
<body>
    <h1>You have visited this page <?php echo $visit_count; ?> times.</h1>
</body>
</html>

