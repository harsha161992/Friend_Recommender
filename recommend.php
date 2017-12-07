<?php
   include('session.php');
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
      <li ><a href="home.php">Home</a></li>
      <li><a href="questionarre.php">Questionarre</a></li>
      <li><a href="profile.php">Profile</a></li>
      <li class="active"><a href="recommend.php">Recommend a friend</a></li>
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

$connection = mysqli_connect('localhost', 'root', 'root', 'friends');
$email_id   = "'" . $_SESSION['login_user'] . "'";

        $query3        = "SELECT * FROM `personality_details`";
        $result3       = mysqli_query($connection, $query3);
       
        //echo $result3;
        //$row    = mysqli_fetch_array($result3, MYSQLI_ASSOC);
    //$active = $row['active'];
    
    $count = mysqli_num_rows($result3);
       
        //$sum = 0;
        $minDifference = 100000000000000;
        $minEmailId    = "";
       // echo "11111";
        while ($row3    = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
            
         if(strcmp("'" . $row3['email_id'] . "'",$email_id)!=0) { 
          
            // do something with the $row
         //echo "harsha". $row3[0]['email_id'];
            $currQuality1 = $row3['quality1'];
            $currQuality2 = $row3['quality2'];
            $currQuality3 = $row3['quality3'];
            $currQuality4 = $row3['quality4'];
            $currQuality5 = $row3['quality5'];
            
            
            $sum = abs($quality1 - $currQuality1) + abs($quality2 - $currQuality2) + abs($quality3 - $currQuality3) + abs($quality4 - $currQuality4) + abs($quality5 - $currQuality5);
            if ($sum < $minDifference) {

               $currEmailId = "'" . $row3['email_id'] . "'";
                $query5  = "SELECT * FROM `user_friends` WHERE user1 = $email_id and user2 = $currEmailId";
                $query6  = "SELECT * FROM `user_friends` WHERE user1 = $currEmailId and user2 = $email_id ";
                $result5 = mysqli_query($connection, $query5);
                $count1  = mysqli_num_rows($result5);
                $result6 = mysqli_query($connection, $query6);
                $count2  = mysqli_num_rows($result6);
              
                
                if (!$count1 >= 1 || !$count2 > 1) {
                      
                    // that combination should not be there in the database
                    $minDifference = $sum;
                    $minEmailId    = $currEmailId;
                }
            }
        }}

       
       // echo $minEmailId;
        
        $query4  = "INSERT INTO `user_friends` VALUES($email_id,$minEmailId,'PENDING')";
        $result4 = mysqli_query($connection, $query4);

          $query5  = "SELECT * FROM `user_details` WHERE email_id = $minEmailId";
             $result5 = mysqli_query($connection,$query5);
               //echo $result;
               $row5 = mysqli_fetch_array($result5,MYSQLI_ASSOC);
            $recommendedName = $row5['name'];
             $recommendedDOB = $row5['date_of_birth'];
              $recommendedSex = $row5['sex'];
               $recommendedProfession = $row5['profession'];
                $recommendedDegree = $row5['degree'];

        ?>

          <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="recommend.php" method="post" enctype="multipart/form-data">
          <fieldset>
            <legend class="text-center">Profile</legend>
    
            <!-- Message body -->
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" class="form-control" value= "<?php echo $recommendedName; ?>">
              </div>
            </div>

             <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Sex</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" class="form-control" value= "<?php echo $recommendedSex; ?>">
              </div>
            </div>

             <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Date of Birth</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" class="form-control" value= "<?php echo $recommendedDOB; ?>">
              </div>
            </div>

             <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Profession</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" class="form-control" value= "<?php echo $recommendedProfession; ?>">
              </div>
            </div>

             <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Degree</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" class="form-control" value= "<?php echo $recommendedDegree; ?>">
              </div>
            </div>
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                  <button type="submit" value="Submit" class="btn btn-success">Accept</button>
        <button type="submit" value="Submit" class="btn btn-success">Reject</button>
         <button type="submit" value="Submit" class="btn btn-success">Recommend Another</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
  </div>    

    </div>

    
</body>
</html>