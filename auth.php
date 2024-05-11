<?php
session_start();
if(!isset($_SESSION['username'])){
header('location: login.php?message= "please login first"');
exit();
}

?>