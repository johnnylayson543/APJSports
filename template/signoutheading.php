<div class="signoutarea">
    <h1>Welcome to APJSports! You are now signed-in as: <?php echo $_SESSION['FirstName'];?></h1>

    <form action="../connectiondatabase/signoutFuncPDO.php" method="post" name="Signout_Form" class="form-signin">
        <button name="Signout" value="Logout" class="button" type="submit">Sign Out</button>
    </form>
</div>
