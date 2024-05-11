<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Login</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* background: gray; */
        }
        form{
            width: 70%;
            box-shadow: 0px 0px 10px grey;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="login" class="btn btn-primary">Submit</button>
</form>
<?php

if(isset($_POST['login'])){
    include('db_connection.php');
    // require('./db_connection.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    // echo $username . " : " . $password;
    $sql =  "SELECT username, password,is_admin FROM users
     WHERE  username = '$username' AND password = '$password'";

     $query = mysqli_query($conn, $sql);
     if(mysqli_num_rows($query) ==1){
        $row = mysqli_fetch_assoc($query);
        if($row['is_admin'] ==1){
        session_start();
        $_SESSION['username']= $username;
        setcookie('user', $username, time() + 20);
        echo " <script> alert('login succesfully!');</script>";
        echo " <script> window.location.href= 'home.php' ;</script>";
        // header('location: home.php ');
        exit();
        } else{
            echo " <script> alert('login succesfully!');</script>";
            echo " <script> window.location.href= 'user.php' ;</script>";   
        }
     } else{
        echo "<script> alert('invalid creadential, try again!');</script>";
     }
}
?>
</body>
</html>