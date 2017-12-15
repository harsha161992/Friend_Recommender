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
      <li><a href="homeadmin.php">Home</a></li>
      <li class="active"><a href="delete.php">Delete a user</a></li>
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
if (isset($_POST['delete'])) 
{
  $deleteEmail   = "'" . $_POST['deleteEmail'] . "'";
        $query1 = "DELETE FROM  `user_details` WHERE email_id=$deleteEmail";
        //echo $query1;
        $result = mysqli_query($connection, $query1);
}
?>
<br/>
<br/>
  <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="delete.php" method="post">
          <fieldset>
            <legend class="text-center">Delete a User</legend>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Email Id</label>
              <div class="col-md-9">
                <input type="text" id="deleteEmail" name="deleteEmail" placeholder="Email id to delete"/>
              </div>
            </div>
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <input type="submit" name="delete" value="Delete" id="delete" class="btn btn-success" >
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
