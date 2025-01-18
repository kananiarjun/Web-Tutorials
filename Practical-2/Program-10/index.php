<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $originalString = "Secure Password123";
        $md5Hash = md5($originalString);
        $sha1Hash = sha1($originalString);
        echo "Original String: {$originalString}<br>";
        echo "MD5 Hash: {$md5Hash}<br>";
        echo "SHA1 Hash: {$sha1Hash}<br>";
    ?>


</body>
</html>
