<?php
// This php login header code checks if the user is logged in. Otherwise, it redirects the user to login.

if($_SESSION['Active'] == false){ /* Redirects user to Login.php if not logged in. Remember, we set $_SESSION['Active'] == true in login.php*/
    header("location:login.php");
    exit;
}
/*the code inside these php tags (i.e. the 5 lines of code above) are required for every page you wish to be accessible only after login*/
?>