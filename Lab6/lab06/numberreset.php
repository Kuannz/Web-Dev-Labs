<?php
    session_start();
    $_SESSION["number"] = array();
    session_destroy();
    header("location:number.php");
?>