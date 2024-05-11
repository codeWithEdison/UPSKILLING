<?php  include('./auth.php') ;
include('./error_reporting.php');
if(!isset($_COOKIE['user'])){
    header('location: login.php');
}
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to admin page</h1>
    <a href="logout.php">logout</a>
</body>
</html>
<script>
    setTimeout(function(){
        location.reload();

    },200);
</script>


