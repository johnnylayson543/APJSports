<?php
// If logout button is pushed, create a new session and then forget the current session
use loginsession\session;
require_once '../loginsession/session.php';
$session = new session();
$session->forgetSession();


