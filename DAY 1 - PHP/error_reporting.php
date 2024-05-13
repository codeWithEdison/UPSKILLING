<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Check if error_logs.txt exists, if not, create it
if (!file_exists("error_logs.txt")) {
    // Create error_logs.txt
    $file = fopen("error_logs.txt", "w");
    fclose($file);
}

// Custom error handler function
function custom_error_reporting($errno, $errorstr, $errorfile, $errorline) {
    $message = "ERROR: [$errno] $errorstr - $errorfile : $errorline";
    error_log($message . PHP_EOL, 3, "error_logs.txt");
}

// Set error handler
set_error_handler("custom_error_reporting");

// Example errors to trigger logging
// Uncomment these lines to trigger errors
echo $undefin;
echo ' welcome';
?>
