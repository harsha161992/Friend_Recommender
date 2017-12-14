<?php
   include('session.php');
     include('connect.php');
   ?>
<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables.css">
      <link rel="stylesheet" type="text/css" href="font-awesome.min.css" />
      <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables_themeroller.css">
      <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
      <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/jquery.dataTables.min.js"></script>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script type="text/javascript">
         $(document).ready(function() {
             $('#questions').DataTable( {
             "iDisplayLength": 50
             } );   
         } );	
             
      </script>

      <title>Questionarre</title>
   </head>
   <body>
      <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Friend Recommender</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li class="active"><a href="questionarre.php">Questionarre</a></li>
      <li ><a href="profile.php">Profile</a></li>
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
      <table id="rating" border="1" bgcolor="#000000">
         <tr>
            <th color="#ffffff"> Disagree Strongly </th>
            <th> Disagree a little </th>
            <th> Neither agree nor disagree </th>
            <th> Agree a little </th>
            <th> Agree strongly </th>
         </tr>
         <tr>
            <td> 1 </td>
            <td> 2 </td>
            <td> 3 </td>
            <td> 4 </td>
            <td> 5 </td>
         </tr>
      </table>
      <br/>
      <br/>
      <br/>
      <?php
         session_start();
       
         $email_id = "'".$_SESSION['login_user']."'";
         $query1 = "SELECT * FROM `personality_details` WHERE email_id=$email_id";
          $result = mysqli_query($connection,$query1);
               //echo $result;
               $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
               //$active = $row['active'];
               
               $count = mysqli_num_rows($result);
               	//echo $count;
               if($count == 1) {
               	//echo JSON.stringify($row);
               		$question1 = $row['question1'];
               		$question2 = $row['question2'];
               		$question3 = $row['question3'];
               		$question4 = $row['question4'];
               		$question5 = $row['question5'];
               		$question6 = $row['question6'];
               		$question7 = $row['question7'];
               		$question8 = $row['question8'];
               		$question9 = $row['question9'];
               		$question10 = $row['question10'];
               		$question11 = $row['question11'];
               		$question12 = $row['question12'];
               		$question13 = $row['question13'];
               		$question14 = $row['question14'];
               		$question15 = $row['question15'];
               		$question16 = $row['question16'];
               		$question17 = $row['question17'];
               		$question18 = $row['question18'];
               		$question19 = $row['question19'];
               		$question20 = $row['question20'];
               		$question21 = $row['question21'];
               		$question22 = $row['question22'];
               		$question23 = $row['question23'];
               		$question24 = $row['question24'];
               		$question25 = $row['question25'];
               		$question26 = $row['question26'];
               		$question27 = $row['question27'];
               		$question28 = $row['question28'];
               		$question29 = $row['question29'];
               		$question30 = $row['question30'];
               		$question31 = $row['question31'];
               		$question32 = $row['question32'];
               		$question33 = $row['question33'];
               		$question34 = $row['question34'];
               		$question35 = $row['question35'];
               		$question36 = $row['question36'];
               		$question37 = $row['question37'];
               		$question38 = $row['question38'];
               		$question39 = $row['question39'];
               		$question40 = $row['question40'];
               		$question41 = $row['question41'];
               		$question42 = $row['question42'];
               		$question43 = $row['question43'];
               		$question44 = $row['question44'];
               		$question45 = $row['question45'];
               		$question46 = $row['question46'];
               		$question47 = $row['question47'];
               		$question48 = $row['question48'];
               		$question49 = $row['question49'];
               		$question50 = $row['question50'];
               	}
         ?>
      <form method="POST" action="save_questionarre.php">
         <table id= "questions" border="1" class="dataTable">
            <thead>
               <tr>
                  <th>Question</th>
                  <th>Rating</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>I am the life of the party </td>
                  <?php echo "<td><input type='text' name='question1' value='$question1' required/></td>"; ?>
               </tr>
               <tr>
                  <td>I feel little concern for others </td>
                  <?php echo "<td><input type='text' name='question2' value='$question2' required /></td>"; ?>
               </tr>
               <tr>
                  <td> I am always prepared </td>
                  <?php echo "<td><input type='text' name='question3' value='$question3' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I get stressed out easily </td>
                  <?php echo "<td><input type='text' name='question4' value='$question4' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I have a rich vocabulary </td>
                  <?php echo "<td><input type='text' name='question5' value='$question5' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I don't talk a lot </td>
                  <?php echo "<td><input type='text' name='question6' value='$question6' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I am interested in people </td>
                  <?php echo "<td><input type='text' name='question7' value='$question7'required /></td>"; ?>
               </tr>
               <tr>
                  <td> I leave my belongings around </td>
                  <?php echo "<td><input type='text' name='question8' value='$question8' required>/</td>"; ?>
               </tr>
               <tr>
                  <td> I am relaxed most of the time </td>
                  <?php echo "<td><input type='text' name='question9' value='$question9' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I have difficulty understanding abstract ideas </td>
                  <?php echo "<td><input type='text' name='question10' value='$question10' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I feel comfortable around people </td>
                  <?php echo "<td><input type='text' name='question11' value='$question11' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I insult people </td>
                  <?php echo "<td><input type='text' name='question12' value='$question12' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I pay attention to details </td>
                  <?php echo "<td><input type='text' name='question13' value='$question13' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I worry about things </td>
                  <?php echo "<td><input type='text' name='question14' value='$question14' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I have a vivid imagination </td>
                  <?php echo "<td><input type='text' name='question15' value='$question15' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I keep in the background </td>
                  <?php echo "<td><input type='text' name='question16' value='$question16' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I sympathize with others' feelings </td>
                  <?php echo "<td><input type='text' name='question17' value='$question17' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I make a mess of things </td>
                  <?php echo "<td><input type='text' name='question18' value='$question18' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I seldom feel blue </td>
                  <?php echo "<td><input type='text' name='question19' value='$question19' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I am not interested in abstract ideas </td>
                  <?php echo "<td><input type='text' name='question20' value='$question20' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I start conversations </td>
                  <?php echo "<td><input type='text' name='question21' value='$question21' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I am not interested in other people's problems </td>
                  <?php echo "<td><input type='text' name='question22' value='$question22' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I get chores done right away </td>
                  <?php echo "<td><input type='text' name='question23' value='$question23' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I am easily disturbed </td>
                  <?php echo "<td><input type='text' name='question24' value='$question24' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I have excellent ideas </td>
                  <?php echo "<td><input type='text' name='question25' value='$question25' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I have little to say </td>
                  <?php echo "<td><input type='text' name='question26' value='$question26' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I have a soft heart </td>
                  <?php echo "<td><input type='text' name='question27' value='$question27' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I often forget to put things back in their proper place </td>
                  <?php echo "<td><input type='text' name='question28' value='$question28' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I get upset easily </td>
                  <?php echo "<td><input type='text' name='question29' value='$question29' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I do not have a good imagination </td>
                  <?php echo "<td><input type='text' name='question30' value='$question30' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I talk to a lot of different people at parties </td>
                  <?php echo "<td><input type='text' name='question31' value='$question31' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I am not really interested in others </td>
                  <?php echo "<td><input type='text' name='question32' value='$question32' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I like order </td>
                  <?php echo "<td><input type='text' name='question33' value='$question33' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I change my mood a lot </td>
                  <?php echo "<td><input type='text' name='question34' value='$question34' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I am quick to understand things </td>
                  <?php echo "<td><input type='text' name='question35' value='$question35' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I don't like to draw attention to myself </td>
                  <?php echo "<td><input type='text' name='question36' value='$question36' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I take time out for others </td>
                  <?php echo "<td><input type='text' name='question37' value='$question37' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I shirk my duties </td>
                  <?php echo "<td><input type='text' name='question38' value='$question38' required/></td>"; ?>
               </tr>
               <tr>
                  <td> Have frequent mood swings </td>
                  <?php echo "<td><input type='text' name='question39' value='$question39' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I use difficult words </td>
                  <?php echo "<td><input type='text' name='question40' value='$question40' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I don't mind being the center of attention </td>
                  <?php echo "<td><input type='text' name='question41' value='$question41' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I feel others' emotions </td>
                  <?php echo "<td><input type='text' name='question42' value='$question42' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I follow a schedule </td>
                  <?php echo "<td><input type='text' name='question43' value='$question43' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I get irritated easily </td>
                  <?php echo "<td><input type='text' name='question44' value='$question44' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I spend time reflecting on things </td>
                  <?php echo "<td><input type='text' name='question45' value='$question45' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I am quiet around strangers </td>
                  <?php echo "<td><input type='text' name='question46' value='$question46' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I make people feel at ease </td>
                  <?php echo "<td><input type='text' name='question47' value='$question47' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I am exacting in my work </td>
                  <?php echo "<td><input type='text' name='question48' value='$question48' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I often feel blue </td>
                  <?php echo "<td><input type='text' name='question49' value='$question49' required/></td>"; ?>
               </tr>
               <tr>
                  <td> I am full of ideas </td>
                  <?php echo "<td><input type='text' name='question50' value='$question50' required/></td>"; ?>
               </tr>
            </tbody>
         </table>
         <br/>
         <br/>
        <input type="submit" name="submit" value="Submit" id="submit" class="btn btn-success" >
      </form>
    </div>
   </body>
</html>