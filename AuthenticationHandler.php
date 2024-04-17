<?php
// Start the session
session_start();

class HTTPRequestInterceptor {
    public function interceptGETRequest() {
        // Check if it's a GET request
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // Modify the request path
            $modifiedPath = '/phpc/new_path/index.html';

            // Redirect to the modified path
            header("Location: $modifiedPath");
            exit(); // Make sure to exit after sending headers to prevent further execution
        }
    }
}

// Instantiate the interceptor
$requestInterceptor = new HTTPRequestInterceptor();
// Call the interceptGETRequest method
$requestInterceptor->interceptGETRequest();
?>
