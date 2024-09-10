<?php
// Enable error logging
ini_set('log_errors', 'On');

// Set the error log file path (same directory as this script)
ini_set('error_log', __DIR__ . '/php-error.log');

// Log a message at the start of the script
error_log("log.php script started.");

// Path to the HTML file
$htmlFilePath = __DIR__ . '/public/index.html';

// Check if the HTML file exists
if (file_exists($htmlFilePath)) {
    // Log the file path
    error_log("Serving HTML file: " . $htmlFilePath);
    
    // Read and output the HTML file content
    echo file_get_contents($htmlFilePath);
    
    // Log a message after serving the file
    error_log("HTML file served successfully.");
} else {
    // Log an error if the file does not exist
    error_log("Error: HTML file not found at " . $htmlFilePath);
    
    // Serve an error message
    http_response_code(404);
    echo "404 Not Found";
}

// Log a message at the end of the script
error_log("log.php script finished.");
?>
