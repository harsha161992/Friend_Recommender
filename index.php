<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form</title>
		<link rel="stylesheet" type="text/css" href="font-awesome.min.css" />
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		
    </head>
    <body>
        <div class="container">
           
            <header>
                <center> <h1>Friend Recommender!</h1></center>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="login1.php" autocomplete="on" method= "POST"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="emailId" class="uname" > Your email or username </label>
                                    <input id="emailId" name="emailId" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                               
                                <p class="login button"> 
                                   <a href="http://cookingfoodsworld.blogspot.in/" target="_blank" ></a>
                                   <input type= "submit" value= "Log in"/>
								</p>

                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="register.php" autocomplete="on" method= "POST"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="emailId" class="youmail"  > Your email</label>
                                    <input id="emailId" name="emailId" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" >Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" >Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="name" class="youmail"  > Name </label>
                                    <input id="name" name="name" required="required" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="profession" class="youpasswd" > Profession </label>
                                    <input id="profession" name="profession" required="required"  placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="dob" class="youpasswd" > Date of birth </label>
                                    <input id="dob" name="dob" required="required"  placeholder="eg. X8df!90EO"/>
                                </p>
                                 <p> 
                                    <label for="sex" class="youpasswd" > Sex </label>
                                    <input id="sex" name="sex" required="required"  placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="degree" class="youpasswd" > Degree </label>
                                    <input id="degree" name="degree" required="required"  placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>