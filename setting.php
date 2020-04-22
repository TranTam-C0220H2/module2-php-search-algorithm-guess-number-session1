<?php
session_start();
$firstNumber = $_POST['firstNumber'];
$lastNumber = $_POST['lastNumber'];
$lengthArrNumber = ($lastNumber - $firstNumber) + 1;
$arrayNumber[0] = $firstNumber;
for ($i = 1; $i < $lengthArrNumber; $i++) {
    $arrayNumber[$i] = $arrayNumber[$i - 1] + 1;
}
$_SESSION['firstIndex'] = 0;
$_SESSION['lastIndex'] = $lengthArrNumber - 1;
$_SESSION['midIndex'] = floor($_SESSION['firstIndex'] + ($_SESSION['lastIndex'] - $_SESSION['firstIndex']) / 2);
$_SESSION['arrayNumber'] = $arrayNumber;
header('Location: view.php');