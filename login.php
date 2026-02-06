<?php

$sql_user = "escola";
$sql_password = "Secret@123";
$sql_host = "localhost";

$conn = new mysqli($sql_host, $sql_user, $sql_password, "injection");

session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$sql_query = "SELECT id,password FROM logins WHERE email =" . $email;

$conn->query($sql_query);



?>