<?php

session_start();
if (!isset($_SESSION['authenticated'])) {
    header('Location: /login.php');
    exit();
}
    
?>
<!DOCTYPE html>
<html>
 <head>
  <title>mike</title>
 </head>
 <body>

  <h1>Assignment 1</h1>

   
   <p> welcome, <?=$_SESSION['username']?> </p>
   
   
 </body>

  <footer>

    <p><a href="/login.php">Click here to login</a></p></p>

    
  </footer>


</html>

