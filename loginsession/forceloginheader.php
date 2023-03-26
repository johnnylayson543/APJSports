<?php
// This php login header code checks if the user is logged in. Otherwise, it redirects the user to login.

// If not logged in (no active session), redirect the user to login page
// Use this as a header on every php page that requires a login to access
if($_SESSION['Active'] == false){
    header("location:signup.php");
    exit;
}
?>
