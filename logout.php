<?php
session_start();

?>

<!DOCTYPE html>
<html>
   <head>
       <title>mike</title>
    <head>
        <body>
            <h1>Assignment 1</h1>

            <p> welcome, <?=$_SESSION['username'] ?></p>
          
        </body>
        <footer> 
           <p><a href="/login.php"> click here to logout </a></p>
        </footer>
</html>