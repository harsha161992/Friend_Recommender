<?php
   include('session.php');
   include('connect.php');
   ?>
<?php
session_start();
$email_id   = "'" . $_SESSION['login_user'] . "'";
		$message = "'" . $_POST['message'] . "'";
    $likes = "'" . $_POST['likes'] . "'";
		$query1 = "UPDATE user_details SET biodata=$message,likes=$likes where email_id = $email_id"; 
        echo $query1;
        $result = mysqli_query($connection, $query1);
        //echo "Updated successfully";
		 header("location: profile.php");
		
   

?>