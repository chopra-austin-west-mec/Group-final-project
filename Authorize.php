<?php
// User name and password for authentication
$username = 'admin';
$password = '1234';
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
    ($_SERVER['PHP_AUTH_USER'] != $username) || ($_SERVER['PHP_AUTH_PW'] != $password)
) {
    // The user name/password are incorrect so send the authentication headers
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="E-box"');
    exit('<h2>E-box: Admin Page</h2>Sorry, you must enter a valid user name and password to access this page.');
}
?>