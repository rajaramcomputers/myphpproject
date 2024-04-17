<?php
// Include the authentication handler class
require_once 'AuthenticationHandler.php';

// Start the session
session_start();

// Instantiate the AuthenticationHandler
$authHandler = new AuthenticationHandler();
// Call the interceptAndRedirect method to enforce authentication
$authHandler->interceptAndRedirect();
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>
    <h1>Welcome to Your Profile</h1>
    <p>This is your profile page. Only logged-in users can access this page.</p>
    <!-- Profile content goes here -->
</body>
</html>
