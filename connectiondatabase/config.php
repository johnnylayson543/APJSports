<?php
/**
 * DB credentials configuration file
 *
 */
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "apjdatabase";
$dsn = "mysql:host=$servername;dbname=$dbname";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);