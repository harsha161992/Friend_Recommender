<html>
      <head>
         <title> Register details </title> </head>
      <body>

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

       
        echo $minEmailId;
        
        $query4  = "INSERT INTO `user_friends` VALUES($email_id,$minEmailId,'PENDING')";
        $result4 = mysqli_query($connection, $query4);
        ?>
       <button type="submit" value="Submit">Accept</button>
        <button type="submit" value="Submit">Reject</button>
         <button type="submit" value="Submit">Recommend Another</button>

    
    
</body>
</html>