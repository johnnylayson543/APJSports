<?php
include '../connectiondatabase/connection.php';
// This is a temporary username and password for login and session testing.
// It should be replaced by login credentials acquired in the database


// Temporary Username and Password
$Email = $_POST['email'];
$Password =$_POST['password'] ;

$sql = "SELECT user.email and user.password FROM user WHERE user.email = '" . $Email . "'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

$checkEmail = $row['email'];
$checkPassword = $row['password'];

