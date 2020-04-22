<?php
session_destroy();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="setting.php" method="post">
    <h3>Game Guess Number</h3>
    <label>From: <input type="number" name="firstNumber"></label>
    <label>From: <input type="number" name="lastNumber"></label>
    <input type="submit" value="Play">
</form>
</body>
</html>

