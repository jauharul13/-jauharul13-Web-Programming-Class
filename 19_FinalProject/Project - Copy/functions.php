<?php
// Database credentials
$db_username = 'epiz_28439395';
$db_password = 'Senyap123';
$database = 'epiz_28439395_pendekinn';
$connect = mysqli_connect('sql304.epizy.com', $db_username, $db_password);


// Encryption - Decryption Setup for URLs
$cipher_key = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($cipher_key);
$options = 0;
$ed_iv = '1234567891011121';
$ed_key = "JoRyan";

function is_min($url) // Check whether the URL is a shortened link.
{
    return (preg_match("/pendekinn\.infinityfreeapp.com/i", $url)) ? true : false; // Match it to our domain.
}

function gen_code() // Generate random 6-length code using substring function.
{
    $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    return substr(str_shuffle($charset), 0, 6);
}

function code_exists($code) // Check whether the code exists.
{
    global $database, $connect;
    mysqli_select_db($connect, $database) or die(mysqli_error($connect));
    $code = mysqli_real_escape_string($connect, $code);
    $query = "SELECT * FROM urls WHERE code = '$code'";
    $code_exists = mysqli_query($connect, $query);
    $rows = mysqli_num_rows($code_exists);
    if ($rows > 0) {
        return true;
    } else {
        return false;
    }
}

function shorten($url, $code) // Shorten the URL with the unique code.
{
    global $database, $connect;
    mysqli_select_db($connect, $database) or die(mysqli_error($connect));

    $url = mysqli_real_escape_string($connect, $url);
    $code = mysqli_real_escape_string($connect, $code);
    $url = encrypt($url); // Encrypt the URL before sending into database.

    $query = "INSERT INTO urls VALUES('','$url','$code')"; // Insert the new link and code into urls table.
    mysqli_query($connect, $query);
    return $code;
}

function redirect($code) // Redirect to the original website if using the code.
{
    global $database, $connect;
    mysqli_select_db($connect, $database) or die(mysqli_error($connect));
    $code = mysqli_real_escape_string($connect, $code);
    if (code_exists($code)) {
        $url_query = mysqli_query($connect, "SELECT `url` FROM urls WHERE code = '$code'");

        while ($info = mysqli_fetch_array($url_query)) {
            $url = $info['url'];
            $url = decrypt($url); // Decrypt the URL upon retrieving.
        }
        header('Location: ' . $url);
    }
}

function encrypt($string) // Encryption function
{
    global $cipher_key, $ed_key, $options, $ed_iv;
    return $encrypted_text = openssl_encrypt($string, $cipher_key, $ed_key, $options, $ed_iv);
}

function decrypt($string) // Decryption function
{
    global $cipher_key, $ed_key, $options, $ed_iv;
    return $decrypted_text = openssl_decrypt($string, $cipher_key, $ed_key, $options, $ed_iv);
}
