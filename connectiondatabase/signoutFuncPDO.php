<?php
// If logout button is pushed, create a new session and then forget the current session
require_once '../loginsession/removesession.php';

$session = new session();
$session->forgetSession();


