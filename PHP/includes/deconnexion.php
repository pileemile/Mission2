<?php
session_start();
unset($_SESSION['inter']);
unset($_SESSION['salarier']);
session_destroy();
header("Location:../catalogue.php");
?>