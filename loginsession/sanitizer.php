<?php

namespace loginsession;

/**
 * This php class sanitizes sign-in and form inputs
 */
class sanitizer
{
    // This function sanitizes any input data from forms and sign-ins
    function sanitize($input) {
        $input = htmlspecialchars($input, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
        $input = trim($input);
        $input = stripslashes($input);
        return ($input);
    }
}