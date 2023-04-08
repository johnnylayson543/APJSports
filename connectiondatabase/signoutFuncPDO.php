<?php
// This php code allows the user to sign out and remove their current session
// If the Sign-Out button is pressed, create a new session and forget the session

use loginsession\removesession;
require_once '../loginsession/removesession.php';

// Create a new removing session then forget the session
$removingSession = new removesession();
$removingSession->forgetSession();


