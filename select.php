<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select</title>
</head>
<body>


<?php
    if (empty($_COOKIE["lang"])) {
        setcookie("lang", $_GET["language"], time() + 3600 * 24 * 1);
    }

    if (isset($_COOKIE["lang"])) {
        setcookie("lang", $_GET["language"], time() + 3600 * 24 * 1);
    }
?>
</body>
</html>