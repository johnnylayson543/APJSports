
<?php
use loginsession\sanitizer;
require_once "../classes/Main.php";
require_once '../loginsession/sanitizer.php';
require '../connectiondatabase/connection.php';
// If the SignIn button is pressed
if(isset($_POST['SignIn']))
{
    // Create a new sanitizer variable using the sanitizer classes
    $sanitizer = new sanitizer();

    // Validate if the Email and Password POST is empty
    if($_POST["Email"] == "" or $_POST["Password"] == ""){
        echo "<h1>Empty Email and Password!</h1>";
    }
    else {

        // Assign the POST form requests to the variables (also needs to be sanitized)
        $Email = $sanitizer->sanitize($_POST["Email"]);
        $Password = $sanitizer->sanitize($_POST["Password"]);

        // Create and prepare sql statement
        $sql = "SELECT firstName, email, password FROM user WHERE email = :email AND password = :password";
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

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if email and password is found and the table rowCount is not 0
        if($stmt->rowCount() > 0){
            $_SESSION['Email'] = $Email; // Store Email to the new session
            $_SESSION['FirstName'] = $user['firstName'];  // Store firstname of the user in session
            $_SESSION['Active'] = true; // Set new session to Active

            header("location:index.php"); // Redirect to index page
        }
        else {
            echo 'Incorrect Email or Password';  // If the Username and Password is incorrect
        }

    }

}

