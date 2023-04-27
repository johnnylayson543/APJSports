<?php
/**
 * Create a PDO connection and install the apjdatabase (including some of its data and structures)
 *
 */
try {
    // Create a PDO connection, grab the apjdatabase sql file and then execute and install it.
    require '../connectiondatabase/connection.php';
    $installsql = file_get_contents("../installdatabase/apjdatabase.sql");
    $conn->exec($installsql);
    echo "apjdatabase - Database and Data for APJSports was installed successfully!";
} catch (PDOException $error) {
    // If the apjdatabase sql file already exists
    echo $installsql . "<br>" . $error->getMessage() . "<br>";
    echo "<h3>ERROR - Database Already Exists!</h3>";
}