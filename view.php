<?php
session_start();
if (isset($_REQUEST['tooLow'])) {
    $_SESSION['firstIndex'] = $_SESSION['midIndex'] + 1;
    $_SESSION['midIndex'] = floor($_SESSION['firstIndex'] + ($_SESSION['lastIndex'] - $_SESSION['firstIndex']) / 2);
}
if (isset($_REQUEST['tooHigh'])) {
    $_SESSION['lastIndex'] = $_SESSION['midIndex'] - 1;
    $_SESSION['midIndex'] = floor($_SESSION['firstIndex'] + ($_SESSION['lastIndex'] - $_SESSION['firstIndex']) / 2);
}
if ($_SESSION['firstIndex'] <= $_SESSION['lastIndex']) {
    echo $_SESSION['arrayNumber'][$_SESSION['midIndex']] . '<br>';
} else {
    echo 'Ban co nho nham ???' . '<br>';
}
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
<form action="" method="post">
    <input type="submit" name="tooLow" value="Too Low">
    <input type="submit" name="tooHigh" value="Too High">
</form>
<button onclick="resetGame()">Correct</button>
<script>
    function resetGame() {
        if (confirm('Play again?')) {
            window.location = 'index.php';
        }
    }
</script>
</body>
</html>
