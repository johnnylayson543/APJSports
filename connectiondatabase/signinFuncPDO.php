
<?php
// Check and use this whether or if the user submits his username and password
if(isset($_POST['Submit']))
{
    require_once('../loginsession/temploginconfig.php');

    // If the Username and Password matches
    if( ($checkEmail == $Email) && ($checkPassword == $Password) )
    {

        // Trigger Success: Apply the Username to the current session and set the session to active (true)
        $_SESSION['Username'] = $Email; // Store Email to the new session
        $_SESSION['Active'] = true; // Set new session to Active
        header("location:index.php"); // Redirect to index page
        exit; // Terminate current code so it doesn't run again on redirect

    }
    else
        echo 'Incorrect Email or Password';  // If the Username and Password is incorrect
}

