<?php

$conn = mysqli_connect("localhost", "root", "", "db_contact");
if($conn === false){
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
}
  
$name = $_POST['t1'];
$last = $_POST['t2'];
$email = $_POST['t3'];
$contact=$_POST['t4'];
$dob=$_POST['t5'];
$pass = $_POST['t6'];
$Tellus=$_POST['t7'];
$Serial=$_POST['t8'];

$sql = "INSERT INTO login VALUES ('$name', '$last','$email', '$contact','$dob','$pass','$pass','$Tellus','$Serial')";
  
if(mysqli_query($conn, $sql)){
    echo "<script type='text/javascript'> document.location ='home.html'; </script>";

} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
}
mysqli_close($conn);
?>