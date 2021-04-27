<?php

include_once('connection.php');
session_start();
function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {

    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM patient_login");
    $stmt->execute();
    $users = $stmt->fetchAll();

    foreach($users as $user) {

        if(($user['email'] == $email) &&
            ($user['password'] == $password)) {
              $_SESSION["patient_id"] = $user["patient_id"];
              header("Location: patient_display.php");
        }
    }
        echo "<script language='javascript'>";
        echo "alert('WRONG PASSWORD')";
        echo "</script>";
        die();
}

?>
