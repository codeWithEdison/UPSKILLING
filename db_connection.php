<?php
//create variables used for connection
$servername = 'localhost';
$username = 'root';
$password ='';
$db_name = 'upskilling';
$port = 3307;


// coonection variable
$conn = mysqli_connect($servername, $username,$password, $db_name, $port);

//  $conn  = new mysqli($servername, $username, $password, $db_name);

if(!$conn ){
    echo "ERROR IN CONNECTION" . mysqli_connect_error();
} 
?>