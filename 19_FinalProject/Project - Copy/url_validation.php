<?php

include 'functions.php';

if (isset($_POST['url'])) 
{
    $url = trim($_POST['url']); //Removes the whitespace characters
    if (empty($url)) // If the URL is empty, return this error to be sent back.
    {
        echo 'error_no_url';
    } 
    else if (filter_var($url, FILTER_VALIDATE_URL) === false) // If it's not a valid URL, return this error to be sent back.
    {
        echo 'error_invalid_url';
    } 
    else if (is_min($url)) // Send this error if its already shortened.
    {
        echo 'error_is_min';
    } 
    else 
    {
        $code = gen_code();
        while (code_exists($code) == false) // Generate a unique code to shorten with the URL.
        {
            echo 'http://pendekinn.infinityfreeapp.com/'.shorten($url, $code); // Concatenate the code to our website link.
            break 1;
        }
    }
}
