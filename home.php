<?php
   include('session.php');
   include('connect.php');
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Friend Recommender</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Friend Recommender</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="questionarre.php">Questionarre</a></li>
      <li><a href="profile.php">Profile</a></li>
      <li><a href="recommend.php">Recommend a friend</a></li>
      <li><a href="pending.php">Pending Requests</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Hello <?php echo $_SESSION['login_user'] ?></a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">

<?php

session_start();
$email_id   = "'" . $_SESSION['login_user'] . "'";

$query1 = "SELECT * FROM `user_friends` WHERE (user1=$email_id or user2=$email_id) AND status='APPROVED'";
   //$connection = mysqli_connect('localhost', 'root', 'root', 'friends');
   //echo $connection;
$result = mysqli_query($connection, $query1);    
$count = mysqli_num_rows($result);
 while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){

 $user1 = "'" . $row['user1'] . "'";
$query5  = "SELECT * FROM `user_details` WHERE email_id = $user1";
             $result5 = mysqli_query($connection,$query5);
         $row5    = mysqli_fetch_array($result5, MYSQLI_ASSOC);
  $emailid = $row5['email_id'];
  $name = $row5['name'];
  $dob = $row5['date_of_birth'];
  $profession = $row5['profession'];
  $degree = $row5['degree'];
  $sex = $row5['sex']; ?>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="home.php" method="post" enctype="multipart/form-data">
          <fieldset>
            <legend class="text-center">Friends</legend>
    
            <!-- Message body -->
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" class="form-control" value= "<?php echo $name; ?>">
              </div>
            </div>
             <input type="hidden" name="minEmailId" value= "<?php echo $emailid; ?>" >
             <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Sex</label>
              <div class="col-md-9">
                <input id="sex" name="sex" type="text" class="form-control" value= "<?php echo $sex; ?>">
              </div>
            </div>

             <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Date of Birth</label>
              <div class="col-md-9">
                <input id="dob" name="dob" type="text" class="form-control" value= "<?php echo $dob; ?>">
              </div>
            </div>

             <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Profession</label>
              <div class="col-md-9">
                <input id="profession" name="profession" type="text" class="form-control" value= "<?php echo $profession; ?>">
              </div>
            </div>

                         <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Degree</label>
              <div class="col-md-9">
                <input id="degree" name="degree" type="text" class="form-control" value= "<?php echo $degree; ?>">
              </div>
            </div>
            
          </fieldset>
          </form>
        </div>
      </div>
  </div>  

<?php 
}
?>
 
        
</div>

</body>
</html>
