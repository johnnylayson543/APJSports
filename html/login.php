<?php require_once '../template/header.php';?>
<?php require_once('temploginconfig.php'); ?>
<link rel="stylesheet" type="text/css" href="../css/signup.css">
    <title>Login to Your APJSports Account</title>
</head>


<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername" >Username</label>
        <input name="Username" type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="Submit" value="Login" class="button" type="submit">Sign in</button>

    </form>

    <?php

    // Check and use this whether or if the user submits his username and password
    if(isset($_POST['Submit']))
    {

        // If the Username and Password matches
        if( ($_POST['Username'] == $Username) && ($_POST['Password'] == $Password) )
        {

            // Trigger Success: Apply the Username to the current session and set the session to active (true)
            $_SESSION['Username'] = $Username; // Store Username to the new session
            $_SESSION['Active'] = true; // Set new session to Active
            header("location:index.php"); // Redirect to index page
            exit; // Terminate current code so it doesn't run again on redirect

        }
        else
            echo 'Incorrect Username or Password';  // If the Username and Password is incorrect
    }
    ?>

</div>

<?php require_once '../template/footer.php';?>

