<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agrokart";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
}


session_start();
$_SESSION['email'] =  $_POST['email'];
header("Location: tracror.php");
header("Location: man.php");

$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM log WHERE email='$email' AND pass='$pass'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
 
    
    
    $conn->close();
     header("location:home.html");
} else {
    header("location:awrongsign.html");
}
$conn->close();

    exit();

?>