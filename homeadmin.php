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
      <script type="text/javascript">
         $(document).ready(function() {
             $('#questions').DataTable( {
             "iDisplayLength": 50
             } );   
         } ); 
             
      </script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Friend Recommender</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="homeadmin.php">Home</a></li>
      <li><a href="delete.php">Delete a user</a></li>
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
$query1 = "SELECT * FROM `user_friends` WHERE status='ACCCEPTED'";
$result1 = mysqli_query($connection,$query1);
$question1 = mysqli_num_rows($result1);

$query2 = "SELECT * FROM `user_friends` WHERE status='PENDING'";
$result2 = mysqli_query($connection,$query2);
$question2 = mysqli_num_rows($result2);

$query3 = "SELECT * FROM `user_friends` WHERE status='REJECTED'";
$result3 = mysqli_query($connection,$query3);
$question3 = mysqli_num_rows($result3);

$query4 = "SELECT * FROM `user_details`";
$result4 = mysqli_query($connection,$query4);
$question4 = mysqli_num_rows($result4);

$query5 = "SELECT * FROM `personality_details`";
$result5 = mysqli_query($connection,$query5);
$question5 = mysqli_num_rows($result5);
?>
<br/>
<br/>
  <table id= "questions" border="1" class="dataTable">
            <thead>
               <tr>
                  <th>Statistics</th>
                  <th>Count</th>
               </tr>
            </thead>
            <tbody>
                           <tr>
                  <td>Number of total users registered</td>
                  <td><label><?php echo $question4; ?></label> </td>
               </tr>
               <tr>
                  <td>Number of friends </td>
                  <td><label><?php echo $question1; ?></label> </td>
               </tr>
               <tr>
                  <td>Number of pending requests</td>
                 <td><label><?php echo $question2; ?></label> </td>
               </tr>
                              <tr>
                  <td>Number of rejected requests</td>
                  <td><label><?php echo $question3; ?></label> </td>
               </tr>
                           <tr>
                  <td>Number of questionarres filled </td>
                  <td><label><?php echo $question5; ?></label> </td>
               </tr>
     </tbody>
     </table>           
 
        
</div>

</body>
</html>
