<?php


//creating test variables
$testUserID = 10000;
$testEmail = "test@email.com";
$testPassword = "testPassword";
$testFirstName = "TestFN";
$testSurname = "TestSN";
$testAddress = "Test Address";

echo "Test 1: Creating a new user and testing the constructor <br><br>";
$test = new User(0,"","","","","");

echo "Test 2: Testing all the setters and getters<br><br>";

echo $test->getUserID() . "<br>";
$test->setUserID($testUserID);
echo $test->getUserID() . "<br>";

echo $test->getEmail() . "<br>";
$test->setEmail($testEmail);
echo $test->getEmail() . "<br>";

echo $test->getPassword() . "<br>";
$test->setPassword($testPassword);
echo $test->getPassword() . "<br>";

echo $test->getFirstName() . "<br>";
$test->setFirstName($testFirstName);
echo $test->getFirstName() . "<br>";

echo $test->getSurname() . "<br>";
$test->setSurname($testSurname);
echo $test->getSurname() . "<br>";

echo $test->getAddress() . "<br>";
$test->setAddress($testAddress);
echo $test->getAddress() . "<br>";

