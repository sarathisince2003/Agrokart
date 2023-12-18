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

$pname=$_POST['pname'];
$items=$_POST['items'];
$pname="White Radish";

$sql = "INSERT INTO seeds ( customeremail,items,productname) VALUES ( '$email','$items','$pname')";



if ($conn->query($sql) === TRUE) {
    header("location:order.html");
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>