<?php
require '../connectiondatabase/connection.php';
// If the SignIn button is pressed
if(isset($_POST['SignIn']))
{
    // Validate if the Email and Password POST is empty
    if($_POST["Email"] == "" or $_POST["Password"] == ""){
        echo "<h1>Empty Email and Password!</h1>";
    }
    else {

        // Assign the POST form requests to the variables (this also needs to be sanitized)
        $Email = $_POST["Email"];
        $Password = $_POST["Password"];
        $sql = "SELECT * FROM user WHERE email = :email AND password = :password";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':email', $Email);
        $stmt->bindValue(':password', $Password);
        $stmt->execute();

        // Check if email and password is found and the table rowCount is not 0
        if($stmt->rowCount() > 0){
            $_SESSION['Email'] = $Email; // Store Email to the new session
            $_SESSION['Active'] = true; // Set new session to Active
            header("location:index.php"); // Redirect to index page
        }
        else {
            echo 'Incorrect Email or Password';  // If the Username and Password is incorrect
        }

    }

}

