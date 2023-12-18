<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "agrokart";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$pass = $_POST['pass'];
$phone=$_POST['phone'];
$address=$_POST['address'];

$sql = "INSERT INTO log (email, pass,phone,address) VALUES ('$email', '$pass','$phone','$address')";

if ($conn->query($sql) === TRUE) {
    header("location:aftercreate.html");
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>