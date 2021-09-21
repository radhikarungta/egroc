<?php
	$Name = $_POST['Name'];
	$Last = $_POST['Last'];
    $email = $_POST['email'];
	$dob = $_POST['dob'];
    $contact = $_POST['contact'];
	$pass = $_POST['pass'];
	$gender = $_POST['gender'];
	$Tellus = $_POST['Tellus'];

	// Database connection
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'dbcontact';
	$conn = new mysqli($server,$username,$password,$dbname);
	// $conn = new mysqli('localhost','root','','mydata');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contacttbl(Name,Last,email,dob,contact,pass,gender,Tellus) values(?, ?, ?, ?,?,?,?,?)");
		$stmt->bind_param("ssssssss", $Name, $Last, $email, $dob,$contact,$pass,$gender,$Tellus);
		$execval = $stmt->execute();
		// echo $execval;
		echo "We will connect with You ASAP!...";
		$stmt->close();
		$conn->close();
	}
?>