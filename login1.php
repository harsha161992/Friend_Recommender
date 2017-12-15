<?php
   include('session.php');
    include('connect.php');
   ?>
<html>
   <head>
      <title> Login details </title>
   <body>
      <?php
         session_start();

         $emailId = $_POST['emailId'];
         $password = $_POST['password'];
         


           $query = "SELECT email_id FROM `user_details` WHERE email_id='$emailId' and password='$password'";
         
           //echo $query;
               $result = mysqli_query($connection,$query);
               //echo $result;
               $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
               $active = $row['active'];
               
               $count = mysqli_num_rows($result);
                //echo $count;
               if($count == 1) {
                  
                  $_SESSION['login_user'] = $emailId;
                if (preg_match('/admin/',$emailId))
                  {
                    echo "here";
                    header("location: homeadmin.php");
                  }
                  else{
             echo $emailId;
                  header("location: home.php");
                }
               }else {
                  echo "Your Login Name or Password is invalid";
               }
            
         ?>
   </body>
   </head>
</html>