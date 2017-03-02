<!DOCTYPE html>
<html>
   <head>
      <title>User log in</title>
	  
	  <link href="stylesheet/public.css" rel="stylesheet" type="text/css" media="screen, projection" />
	 <link href="stylesheet/tablet.css" rel="stylesheet" type="text/css" media="all and (min-width: 481px) and (max-width: 768px)" />
	 <link href="stylesheet/mobile.css" rel="stylesheet" type="text/css" media="all and (min-width: 0px) and (max-width: 480px)" />
   </head>
   <body>
   <div id="login_form">
   <?php
      if(isset($_GET['signup']) && $_GET['signup'] == 1){
		  echo "<p class=\"sucess\">You are successfully signed up. <br/>Login to your page</p>";
	  }
	  if(isset($_GET['login']) && $_GET['login']==0){
		  echo "<h4 class=\"error\">Username and Password combination is incorrect <br/>";
		  echo "Please enter the correct and valid username and password </h4>";
	  }
   ?>
   
   <div id="login_header">
	   <img src="images/login_image.jpg" id="login_image">
	   <h3>Log In Page</h3>
   </div>
   <div id="clear"></div>
      <form method="post" action="User_Detail.php" >
	     <p>Username:&nbsp;&nbsp;&nbsp;<input type="text" name="username" placeholder="Enter Your User Name"></p>
	     <p>Password:&nbsp;&nbsp;&nbsp;<input type="password" name="password" placeholder="Enter Your Password"></p>
		 <input type="Submit" value="Create User">
		<br/><br/>
		 <a href="signup.php">Create an account</a>
	  </form>
	 </div> 
   </body>
</html>