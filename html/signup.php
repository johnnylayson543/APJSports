<?php require_once '../template/header.php';?>
<link rel="stylesheet" type="text/css" href="../css/signup.css">
<title>Sign in to your APJSports Account</title>
</head>


<body>

<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signup">
        <h2 class="form-signup-heading">Please sign in</h2>

        <label for="inputEmail" >Email</label>
        <input name="Email" type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus><br>

        <label for="inputPassword">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required autofocus><br>

        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="Submit" value="Signup" class="button" type="submit">Sign In</button>

    </form>

</div>

<?php require_once '../connectionmysqli/signinFunc.php'; ?>

<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signup">
        <h2 class="form-signup-heading">Or create an new APJSports Account</h2>

        <label for="inputUFirstname" >First Name</label>
        <input name="Firstname" type="firstname" id="inputUFirstname" class="form-control" placeholder="Firstname" required autofocus><br>

        <label for="inputSurname" >Surname</label>
        <input name="Surname" type="surname" id="inputSurname" class="form-control" placeholder="Surname" required autofocus><br>


        <label for="inputAddress" >Address</label>
        <input name="Address" type="address" id="inputAddress" class="form-control" placeholder="Address" required autofocus><br>

        <label for="inputEmail" >Email</label>
        <input name="Email" type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus><br>

        <label for="inputPassword">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required autofocus><br>

        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="Submit" value="Signup" class="button" type="submit">Sign up</button>
        <?php require_once '../connectionmysqli/signupFunc.php'; ?>
    </form>
</div>

<?php require_once '../template/footer.php';?>
