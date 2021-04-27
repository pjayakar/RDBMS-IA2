<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["id"]);
unset($_SESSION["patient_id"]);
header("Location:index.php");
?>
