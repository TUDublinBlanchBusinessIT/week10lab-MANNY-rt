<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION['subTenKG'] = isset($_POST['subTenKG']) ? $_POST['subTenKG'] : 0;
    $_SESSION['overTenKG'] = isset($_POST['overTenKG']) ? $_POST['overTenKG'] : 0;

    header('Location: finalStep.php');
    exit()
}
?>