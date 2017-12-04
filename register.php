<html>
   <head>
      <title> Register details </title>
   <body>
      <?php
         require('connect.php');
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
                     echo "User Created Successfully."; ?>
                     <A HREF="login.php">Login</A>
                 <?php }else{
                     echo "User Registration Failed";
                 }
         ?>
   </body>
   </head>
</html>