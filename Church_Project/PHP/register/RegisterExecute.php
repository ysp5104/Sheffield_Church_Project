<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$email = $_POST['email'];
$name= $_POST['name'];
$password = $_POST['password'];
$confirmPassword= $_POST['confirmPassword'];
$religion = $_POST['religion'];
$title1= $_POST['title1'];
$forname1 = $_POST['forname1'];
$surname1= $_POST['surname1'];
$email1 = $_POST['email1'];
$phone1= $_POST['phone1'];
$title2 = $_POST['title2'];
$forname2= $_POST['forname2'];
$surname2 = $_POST['surname2'];
$phone2= $_POST['phone2'];
$email2 = $_POST['email2'];
$message= $_POST['message'];

if ( $password == $confirmPassword ){
	$flag=true;
}
else {
	
	echo "your password not equles";
}

$salt="454645llfjdlifhuhghgi".$password."fdgddgdgddd";
$hash=hash('sha512',$salt);

if ( $flag == true ) {
$sql = "INSERT INTO ub(name,email,password,religion,title1,forname1,surname1,email1,phone1,title2,forname2,surname2,phone2,email2,message) VALUES('$name','$email','$hash','$religion','$title1','$forname1','$surname1','$email1','$phone1','$title2','$forname2','$surname2','$phone2','$email2','$message')";
}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>