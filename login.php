<?php

$sql_user = "escola";
$sql_password = "Secret@123";
$sql_host = "localhost";

$conn = new mysqli($sql_host, $sql_user, $sql_password, "injection");

session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$sql_query = "SELECT id FROM logins WHERE email ='$email' AND password='$password'";

$result = $conn->query($sql_query);
$row = $result->fetch_assoc();


if ($result->num_rows > 0) {
    $_SESSION['id'] = $row['id'];
    echo "Login successful!";
} else {
    echo "Invalid email or password!";
}





?>