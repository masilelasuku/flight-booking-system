<?php
session_start();
$host = 'localhost';
$db = 'Flight_ Booking';
$user = 'root';
$pass = '';
// create a connection
$conn = new mysqli($host, $user, $pass, $db);
// Check connection
if ($conn->connect_error){
    die("connection failed: " $conn->connect_error);
}
//Get user inputs
$username = $_POST['username'];
$password = $_POST['password'];
//check if user exist
$spl = "SELECT * FROM users Where username='$username'";
$result = $conn->query($sql);

if($result->num_rows>0){
    $row = $result->fetch_assoc();
    //verify password
    if(password_verify($password,$row['password'])){
            $_SESSION['username']= $username;
                header("Location: dashboard.php");
    } else {
        echo "Invalid password";
    } else {
        echo "No user found";
    }
}
$conn->close();
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
?>