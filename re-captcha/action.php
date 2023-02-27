<?php
session_start();

if (isset($_POST['captcha'])) {
    if($_SESSION['phrase'] == $_POST['captcha']) {
        echo "Correct captcha";
    }
    else {
        header("Location: index.php");
    }
}