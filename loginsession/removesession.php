<?php

namespace loginsession;

/**
 * This php classes removes and kills sign-in sessions
 */
class removesession{

    // This function overwrites the previous session and destroys it
    function killSession()
    {
        // Assign an empty array on the current sessions to start overwriting it
        $_SESSION = [];

        // Overwrite the cookies as well with an empty data and array as well
        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie(session_name(),
                '', time() - 42000,
                $params['path'], $params['domain'],
                $params['secure'], $params['httponly']
            );
        }
        session_destroy();
    }

    // This function forgets the session by using the killSession and redirects you back to the signup page
    function forgetSession()
    {
        $this->killSession();
        header("location:../html/signup.php");  // Redirect the user to signup page after killing the current session
        exit;

    }


}




