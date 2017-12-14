<?php
   include('connect.php');
?>
<html>
   <head>
      <title> Register details </title>
   <body>
      <?php
    
         $emailId = $_POST['emailId'];
         $password = $_POST['password'];
         $name = $_POST['name'];
         $dob = $_POST['dob'];
         $sex = $_POST['sex'];
         $profession = $_POST['profession'];
         $degree = $_POST['degree'];
           $query = "INSERT INTO `user_details` (email_id, password, name,date_of_birth,sex,profession,degree) VALUES ('$emailId', '$password', '$name','$dob','$sex','$profession','$degree')";
         
                  //$query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
         //echo $connection;
                 $result = mysqli_query($connection, $query);
                 if($result){
                   header("location: index.php");
                     
                  }else{
                   header("location: index.php");
                 }
         ?>
   </body>
   </head>
</html>