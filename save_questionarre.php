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

if (isset($_POST['submit'])) 
{
    $question1  = (isset($_POST["question1"]) && !empty($_POST["question1"]) ? $_POST["question1"] : "NULL");
    $question2  = (isset($_POST["question2"]) && !empty($_POST["question2"]) ? $_POST["question2"] : "NULL");
    $question3  = (isset($_POST["question3"]) && !empty($_POST["question3"]) ? $_POST["question3"] : "NULL");
    $question4  = (isset($_POST["question4"]) && !empty($_POST["question4"]) ? $_POST["question4"] : "NULL");
    $question5  = (isset($_POST["question5"]) && !empty($_POST["question5"]) ? $_POST["question5"] : "NULL");
    $question6  = (isset($_POST["question6"]) && !empty($_POST["question6"]) ? $_POST["question6"] : "NULL");
    $question7  = (isset($_POST["question7"]) && !empty($_POST["question7"]) ? $_POST["question7"] : "NULL");
    $question8  = (isset($_POST["question8"]) && !empty($_POST["question8"]) ? $_POST["question8"] : "NULL");
    $question9  = (isset($_POST["question9"]) && !empty($_POST["question9"]) ? $_POST["question9"] : "NULL");
    $question10 = (isset($_POST["question10"]) && !empty($_POST["question10"]) ? $_POST["question10"] : "NULL");
    $question11 = (isset($_POST["question11"]) && !empty($_POST["question11"]) ? $_POST["question11"] : "NULL");
    $question12 = (isset($_POST["question12"]) && !empty($_POST["question12"]) ? $_POST["question12"] : "NULL");
    $question13 = (isset($_POST["question13"]) && !empty($_POST["question13"]) ? $_POST["question13"] : "NULL");
    $question14 = (isset($_POST["question14"]) && !empty($_POST["question14"]) ? $_POST["question14"] : "NULL");
    $question15 = (isset($_POST["question15"]) && !empty($_POST["question15"]) ? $_POST["question15"] : "NULL");
    $question16 = (isset($_POST["question16"]) && !empty($_POST["question16"]) ? $_POST["question16"] : "NULL");
    $question17 = (isset($_POST["question17"]) && !empty($_POST["question17"]) ? $_POST["question17"] : "NULL");
    $question18 = (isset($_POST["question18"]) && !empty($_POST["question18"]) ? $_POST["question18"] : "NULL");
    $question19 = (isset($_POST["question19"]) && !empty($_POST["question19"]) ? $_POST["question19"] : "NULL");
    $question20 = (isset($_POST["question20"]) && !empty($_POST["question20"]) ? $_POST["question20"] : "NULL");
    $question21 = (isset($_POST["question21"]) && !empty($_POST["question21"]) ? $_POST["question21"] : "NULL");
    $question22 = (isset($_POST["question22"]) && !empty($_POST["question22"]) ? $_POST["question22"] : "NULL");
    $question23 = (isset($_POST["question23"]) && !empty($_POST["question23"]) ? $_POST["question23"] : "NULL");
    $question24 = (isset($_POST["question24"]) && !empty($_POST["question24"]) ? $_POST["question24"] : "NULL");
    $question25 = (isset($_POST["question25"]) && !empty($_POST["question25"]) ? $_POST["question25"] : "NULL");
    $question26 = (isset($_POST["question26"]) && !empty($_POST["question26"]) ? $_POST["question26"] : "NULL");
    $question27 = (isset($_POST["question27"]) && !empty($_POST["question27"]) ? $_POST["question27"] : "NULL");
    $question28 = (isset($_POST["question28"]) && !empty($_POST["question28"]) ? $_POST["question28"] : "NULL");
    $question29 = (isset($_POST["question29"]) && !empty($_POST["question29"]) ? $_POST["question29"] : "NULL");
    $question30 = (isset($_POST["question30"]) && !empty($_POST["question30"]) ? $_POST["question30"] : "NULL");
    $question31 = (isset($_POST["question31"]) && !empty($_POST["question31"]) ? $_POST["question31"] : "NULL");
    $question32 = (isset($_POST["question32"]) && !empty($_POST["question32"]) ? $_POST["question32"] : "NULL");
    $question33 = (isset($_POST["question33"]) && !empty($_POST["question33"]) ? $_POST["question33"] : "NULL");
    $question34 = (isset($_POST["question34"]) && !empty($_POST["question34"]) ? $_POST["question34"] : "NULL");
    $question35 = (isset($_POST["question35"]) && !empty($_POST["question35"]) ? $_POST["question35"] : "NULL");
    $question36 = (isset($_POST["question36"]) && !empty($_POST["question36"]) ? $_POST["question36"] : "NULL");
    $question37 = (isset($_POST["question37"]) && !empty($_POST["question37"]) ? $_POST["question37"] : "NULL");
    $question38 = (isset($_POST["question38"]) && !empty($_POST["question38"]) ? $_POST["question38"] : "NULL");
    $question39 = (isset($_POST["question39"]) && !empty($_POST["question39"]) ? $_POST["question39"] : "NULL");
    $question40 = (isset($_POST["question40"]) && !empty($_POST["question40"]) ? $_POST["question40"] : "NULL");
    $question41 = (isset($_POST["question41"]) && !empty($_POST["question41"]) ? $_POST["question41"] : "NULL");
    $question42 = (isset($_POST["question42"]) && !empty($_POST["question42"]) ? $_POST["question42"] : "NULL");
    $question43 = (isset($_POST["question43"]) && !empty($_POST["question43"]) ? $_POST["question43"] : "NULL");
    $question44 = (isset($_POST["question44"]) && !empty($_POST["question44"]) ? $_POST["question44"] : "NULL");
    $question45 = (isset($_POST["question45"]) && !empty($_POST["question45"]) ? $_POST["question45"] : "NULL");
    $question46 = (isset($_POST["question46"]) && !empty($_POST["question46"]) ? $_POST["question46"] : "NULL");
    $question47 = (isset($_POST["question47"]) && !empty($_POST["question47"]) ? $_POST["question47"] : "NULL");
    $question48 = (isset($_POST["question48"]) && !empty($_POST["question48"]) ? $_POST["question48"] : "NULL");
    $question49 = (isset($_POST["question49"]) && !empty($_POST["question49"]) ? $_POST["question49"] : "NULL");
    $question50 = (isset($_POST["question50"]) && !empty($_POST["question50"]) ? $_POST["question50"] : "NULL");
    
    $query1 = "SELECT email_id FROM `personality_details` WHERE email_id=$email_id";
    //echo "yo";
    $result = mysqli_query($connection, $query1);
    //echo $result;
    $row    = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //$active = $row['active'];
    
    $count = mysqli_num_rows($result);
    // echo $count;
    if ($count == 1) {
        $query1 = "UPDATE `personality_details` SET question1 = $question1, question2 = $question2,question3 = $question3,question4 = $question4,question5 = $question5,question6 = $question6,question7 = $question7,question8 = $question8,question9 = $question9,question10 = $question10,question11 = $question11, question12 = $question12,question13 = $question13,question14 = $question14,question15 = $question15,question16 = $question16,question17 = $question17,question18 = $question18,question19 = $question19,question20 = $question20,question21 = $question21, question22 = $question22,question23 = $question23,question24 = $question24,question25 = $question25,question26 = $question26,question27 = $question27,question28 = $question28,question29 = $question29,question30 = $question30,question31 = $question31, question32 = $question32,question33 = $question33,question34 = $question34,question35 = $question35,question36 = $question36,question37 = $question37,question38 = $question38,question39 = $question39,question40 = $question40,question41 = $question41, question42 = $question42,question43 = $question43,question44 = $question44,question45 = $question45, question46 = $question46,question47 = $question47,question48 = $question48,question49 = $question49, question50 = $question50 where email_id= $email_id";
        //echo $query1;
        $result = mysqli_query($connection, $query1);
    } else {
        $query  = "INSERT INTO `personality_details` VALUES ($email_id,$question1, $question2,$question3,$question4,$question5,$question6,$question7,$question8,$question9,$question10,$question11, $question12,$question13,$question14,$question15,$question16,$question17,$question18,$question19,$question20,$question21, $question22,$question23,$question24,$question25,$question26,$question27,$question28,$question29,$question30,$question31, $question32,$question33,$question34,$question35,$question36,$question37,$question38,$question39,$question40,$question41, $question42,$question43,$question44,$question45,$question46,$question47,$question48,$question49,$question50,NULL,NULL,NULL,NULL,NULL)";
        $result = mysqli_query($connection, $query);
    }


        $quality1 = (20 + $question1 - $question6 + $question11 - $question16 + $question21 - $question26 + $question31 - $question36 + $question41 - $question46) / 10;
        $quality2 = (14 - $question2 + $question7 - ($question12) + $question17 - $question22 + ($question27) - $question32 + ($question37) + $question42 + $question47) / 10;
        $quality3 = (14 + $question3 - ($question8) + $question13 - $question18 + ($question23) - $question28 + ($question33) - $question38 + ($question43) + $quality48) / 10;
        $quality4 = (38 - $question4 + ($question9) - $question14 + $question19 - ($question24) - $question29 - ($question34) - $question39 - $question44 - $question49) / 10;
        $quality5 = (8 + $question5 - ($question10) + $question15 - $question20 + $question25 - ($question30) + $question35 + ($question45) + $question40 + $question50) / 10;
        
        $query2  = "UPDATE `personality_details` SET quality1 = $quality1, quality2 = $quality2, quality3 = $quality3, quality4=$quality4, quality5=$quality5 where email_id = $email_id";
        $result2 = mysqli_query($connection, $query2);
         header("location: recommend.php");
      }



?>
  </div>        
      </body>
      </head>
   </html>