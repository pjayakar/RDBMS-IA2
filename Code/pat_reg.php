<?php
$x=$_POST['patient_id'];
$y=$_POST['email'];
$z=$_POST['password'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$record1 = mysqli_query($conn,"SELECT * FROM patients_record");

  while($row = mysqli_fetch_array($record1)){
    if($row["patients_id"] == $x)
    {
      $sql = "INSERT INTO patient_login (patient_id, email, password)
       VALUES ('$x','$y','$z')";
       if ($conn->query($sql) === TRUE){
       	echo "\nNew record created successfully";
         header("Location: patlog.php");
       }
       else{
       	echo "ERROR: " .$sql. "<br>" . $conn->error;
       }
    }
  }
echo "<script language='javascript'>";
echo "alert('You have not been provided a valid patient ID, hence you cant make an account!')";
echo "</script>";
$conn->close();

?>
