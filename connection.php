<?php

$conn = "";

try {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "hospital";

    $conn = new PDO(
        "mysql:host=$servername; dbname=hospital",
        $username, $password
    );

   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
