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

        // Bind the sql attributes and values on the user table with the PHP variables as "placeholder" to prevent SQL Injection
        $stmt->bindValue(':email', $Email);
        $stmt->bindValue(':password', $Password);
        // Execute the sql statement with specific associative array values & attributes on the user table.
        // If not, it executes and assigns all the default associative array values & attributes on the user table alongside with the
        // default $_POST["Email"] and $_POST["Password"] requests and values
        // You can do $stmt->execute(array('email' => $_POST["Email"], 'password' => $_POST["Password"])) as well
        $stmt->execute(array(
            'email' => $Email,
            'password' => $Password
        ));

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

