<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "agrokart";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$email = $_SESSION['email'];


$implement = $_POST['implement'];
$date=$_POST['date'];
$time=$_POST['time'];
$owner="Sarathi";

$sql = "INSERT INTO tracktor ( customeremail,implement,date,time,tracktorowner) VALUES ( '$email','$implement','$date','$time','$owner')";



if ($conn->query($sql) === TRUE) {
    header("location:order.html");
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>