<?php
session_start();

if(!isset($_SESSION['online'])){
    header("location: index.php");
    exit;
}

if(!$_SESSION['online']){
    header("location: index.php");
    exit;
}
?>