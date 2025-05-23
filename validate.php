<?php

    session_start();
    $valid_username = "mike";
    $valid_password = "password";

    $username = $_REQUEST['username'];
    $SESSION['username']= $usernmae
    $password = $_REQUEST['password'];

if ($valid_username == $username && $valid_password == $password) {
  header('Location/');
} else{
    if (!isset($_SESSION['failed_attempts']))
    {
        $_SESSION['failed_attempts'] = 1;
    }
    else
    {
        $_SESSION['failed_attempts'] = $_SESSION['failed_attempts'] + 1;
    }
     echo "this is an unseccessful attempt number " , $_SESSION[ 'failed_attempts'];
  }
      


?>
  