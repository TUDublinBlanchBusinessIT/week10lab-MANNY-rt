<?php
session_start();

$_SESSION['passengerFN'] = isset($_POST['firstname']) ? $_POST['firstname'] : '';
$_SESSION['passengerSN'] = isset($_POST['surname']) ? $_POST['surname'] : '';

if (isset($_POST['luggage'])) {
    $_SESSION['luggage'] = 1;
    header('Location: luggage.html');
    exit();
} else {
    $_SESSION['luggage'] = 0;
    header('Location: finalStep.php');
    exit();
}
?>