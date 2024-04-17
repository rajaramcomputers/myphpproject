<?php
class HTTPRequest {
    private $method;
    private $path;
    private $protocol;

    public function __construct($request) {
        // Parse the request string
        list($this->method, $this->path, $this->protocol) = explode(' ', $request);
    }

    public function getMethod() {
        return $this->method;
    }

    public function getPath() {
        return $this->path;
    }

    public function getProtocol() {
        return $this->protocol;
    }
}

// Example usage
$requestString = "GET /index.html HTTP/1.1";
$request = new HTTPRequest($requestString);

echo "Method: " . $request->getMethod() . "\n";
echo "Path: " . $request->getPath() . "\n";
echo "Protocol: " . $request->getProtocol() . "\n";
?>