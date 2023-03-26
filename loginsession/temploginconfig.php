<?php
include '../connectiondatabase/connection.php';

$Email = $_POST['email'];
$Password =$_POST['password'] ;

$sql = "SELECT user.email and user.password FROM user WHERE user.email = '" . $Email . "'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

$checkEmail = $row['email'];
$checkPassword = $row['password'];

