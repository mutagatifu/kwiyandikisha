<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 11/12/2018
 * Time: 18:07
 */
session_start();
unset($_SESSION['']);
session_destroy();
header("location:login.php");
?>
