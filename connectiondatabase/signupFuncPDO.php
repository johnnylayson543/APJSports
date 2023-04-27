<?php
use loginsession\sanitizer;

require_once '../loginsession/sanitizer.php';
require "connection.php";
// Once user presses submit on the sign up for the following will happen
if(isset($_POST['Submit1'])){

    // Create a new sanitizer variable using the sanitizer classes
    $sanitizer = new sanitizer();

    // Assigning values to variables based on user's input in the form (also needs to be sanitized)
    $firstName = $sanitizer->sanitize($_POST['Firstname']);
    $surName = $sanitizer->sanitize($_POST['Surname']);
    $address = $sanitizer->sanitize($_POST['Address']);
    $email = $sanitizer->sanitize($_POST['Email']);
    $password = $sanitizer->sanitize($_POST['Password']);

    // Validating that all the fields are filled in
    if (!empty($firstName) && !empty($surName) && !empty($address) && !empty($email) && !empty($password)) {


        // Validate first name to only allow characters and no symbols or numbers
        //Preg_match to see if it matches the requirement
        if (!preg_match("/^[a-zA-Z]+$/", $firstName)) {
            $error = "First name must contain only letters";
        }

        // Validate surname (same as first name)
        if (!preg_match("/^[a-zA-Z]+$/", $surName)) {
            $error = "Surname must contain only letters";
        }

        // Display error message if wrong
        if (isset($error)) {
            echo $error;
            exit();
        }


        $sql = "SELECT * FROM user WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        // Validating that email address isn't already assigned to ad different user
        if ($stmt->rowCount() > 0) {//if a result shows up that means email is already taken
            echo "Email already in use.";
        } else {

            $stmt = $conn->prepare("SELECT * FROM user");
            $stmt->execute();
            $x = $stmt->rowCount() + 1;

            $sql = "INSERT INTO user (userID, email, password, firstName, surName, address) VALUES (:x, :email, :password, :firstName, :surName, :address)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':x', $x);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':firstName', $firstName);
            $stmt->bindParam(':surName', $surName);
            $stmt->bindParam(':address', $address);

            // Adding all the user details to the database
            if ($stmt->execute()) {
                echo "Account created";
            } else {
                echo "Error!";
            }
        }
    } else {
        // If some fields are left empty message will say "Please fill in all the fields provided"
        echo "Please fill in all the fields provided";
    }
}