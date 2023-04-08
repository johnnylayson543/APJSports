<?php
// This php code checks if the user has signed-in and created a session.
// If not, it redirects you to the sign-in/sign-up page and forces the user to sign-in or create an account

if($_SESSION['Active'] == false){
    header("location:signup.php");
    exit;
}

