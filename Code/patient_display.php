<?php
  session_start();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="dis.css">
    <title>Willow Green</title>
    <style type="text/css">
        <?php include "navbar/navbarCSS.php"; ?>
    </style>
      </head>
      <body>
      <?php include "navbar/pat_nav.php"; ?>
    <br>
      <br>
        <br>
          <br>
    <h2>Patient Primary Record</h2>
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "hospital";
          $conn = new mysqli($servername, $username, $password, $dbname);
          $a = $_SESSION["patient_id"];
          $sql = "SELECT * FROM patients_record WHERE patients_id = '$a'";
          $result = $conn->query($sql);

          if ($result->num_rows > 0){
          echo "
            <div class='table-wrapper'>
            <table class='fl-table'>
            <tr>
            <th>Patient ID</th>
            <th>Admission data</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Marital Status</th>
            </tr>";

            while($row = $result->fetch_assoc()){
              echo"
                  <tr>
                  <td>
                  " .$row["patients_id"] . "
                  </td>
                  <td>
                  " .$row["admit_date"] . "
                  </td>
                  <td>
                  " . $row["patients_firstname"] . "
                  </td>
                  <td>
                  " . $row["patients_lastname"] . "
                  </td>
                  <td>
                  " . $row["Age"] . "
                  </td>
                  <td>
                  " . $row["marital_status"] . "
                  </td>

                  </tr>";
            }
            echo "</table>";
            echo "</div>";
          }
          else{
            echo "0 results";
          }

          $conn->close();
          ?>
          <h2>Patient Diagnostic Record</h2>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "hospital";
                $conn = new mysqli($servername, $username, $password, $dbname);
                $a = $_SESSION["patient_id"];
                $sql = "SELECT * FROM patients_record WHERE patients_id = '$a'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0){
                echo "
                  <div class='table-wrapper'>
                  <table class='fl-table'>
                  <tr>
                  <th>Patient ID</th>
                  <th>Doctor ID</th>
                  <th>Symptoms</th>
                  </tr>";

                  while($row = $result->fetch_assoc()){
                    echo"
                        <tr>
                        <td>
                        " .$row["patients_id"] . "
                        </td>
                        <td>
                        " . $row["doctor_id"] . "
                        </td>
                        <td>
                        " . $row["Symptom_sickness"] . "
                        </td>
                        </tr>";
                  }
                  echo "</table>";
                  echo "</div>";
                }
                else{
                  echo "0 results";
                }
                $conn->close();
                ?>
                



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
