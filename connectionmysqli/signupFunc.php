<?php
include "connectionsqli.php";

//once user presses submit on the sign up for the following will happen
if(isset($_POST['Submit'])){

    //assigning values to variables based on user's input in the form
    $firstName = $_POST['Firstname'];
    $surName = $_POST['Surname'];
    $address = $_POST['Address'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];

        //validating that all the fields are filled in
        if ($firstName || $surName || $address || $email || $password != null){

        $sql = "select * from user where email = '" . $email . "'";
        $qryResult = mysqli_query($conn, $sql);

        //validating that email address isn't already assigned to ad different user
        if (mysqli_num_rows($qryResult) > 0) {//if a result shows up that means email is already taken
            echo "Email already in use.";
        } else {

            $x = 1;
            $sql = "select * from user";
            $qryResult = mysqli_query($conn, $sql);

            //counting how many users are already in the database
            while ($row = mysqli_fetch_assoc($qryResult)) {
                $x++;//for every row of users we have we add 1 to x, that way if we have 20 users x will equal 21
            }

            $sql = "insert into user (userID, email, password, firstName, surName, address) values  (" .
            $x . ", '" . $email . "', '" . $password . "', '" . $firstName . "', '" . $surName . "', '" .
            $address . "')";

            //adding all the user details to the database
            if (mysqli_query($conn, $sql)) {
                echo "Account created";
            }
            else{
                echo "error";
            }
        }
    }

    else {//if some fields are left empty message will say "Please fill in all the fields provided"

        echo "Please fill in all the fields provided";
    }

}