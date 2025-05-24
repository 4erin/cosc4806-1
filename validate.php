<?php

    session_start();
    $valid_username = "mike";
    $valid_password = "password";

    $username = $_REQUEST['username'];
    $_SESSION['username']= $username;
    $password = $_REQUEST['password'];

if ($username == $valid_username && $password == $valid_password) {
    $_SESSION['authenticated'] = 1;
  header('Location: /logout.php');

    if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== 1) {
    header('Location: /login.php');
    exit()
    
} else{
    if (!isset($_SESSION['failed_attempts']))
    {
        $_SESSION['failed_attempts'] = 1;
    }
    else
    {
        $_SESSION['failed_attempts'] = $_SESSION['failed_attempts'] + 1;
    }
     header('Location: /login.php');
     echo "this is an unseccessful attempt number " , $_SESSION[ 'failed_attempts'];

    
  }
      


?>
  