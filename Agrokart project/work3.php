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

$date=$_POST['date'];
$name="Sanjay";

$sql = "INSERT INTO workers ( customeremail,worker,date) VALUES ( '$email','$name','$date')";



if ($conn->query($sql) === TRUE) {
    header("location:order.html");
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>