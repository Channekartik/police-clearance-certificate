<?php
    session_start();
    if(!isset($_SESSION["signup"])) {
        header("Location: loginmenu.php");
        exit();
    }
?>
