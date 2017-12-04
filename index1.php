<?php
   include('session.php');
   ?>
<html>
   <head>
      <title>Welcome </title>
   </head>
   <body>
      <h3>
      Welcome <?php echo $login_session; ?></h1>
      <a href = "questionarre.php"> Questionarre </a> 
      <h3>
      <a href = "logout.php">Sign Out</a></h2>
   </body>
</html>