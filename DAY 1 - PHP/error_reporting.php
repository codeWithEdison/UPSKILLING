<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

// custom error handler function
function custom_error_reporting(
$errno, $errorstr, $errorfile, $errorline){
$message=  "ERROR: [$errno] $errorstr - $errorfile : $errorline";
error_log($message . PHP_EOL, 3, "error_logs.txt");
}
set_error_handler("custom_error_reporting");
// echo $undefin;
// echo ' welcome';
?>