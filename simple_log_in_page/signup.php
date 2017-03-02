<!DOCTYPE html>
<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>

<html>
   <head>
      <title>User signup</title>
	  <link href="stylesheet/public.css" rel="stylesheet" type="text/css" media="screen, projection" />
	 <link href="stylesheet/tablet.css" rel="stylesheet" type="text/css" media="all and (min-width: 481px) and (max-width: 768px)" />
	 <link href="stylesheet/mobile.css" rel="stylesheet" type="text/css" media="all and (min-width: 0px) and (max-width: 480px)" />
   </head>
   <body>
   <div id="signup_form">
      <h3>SignUp Page </h3>
   <?php include('signup_root.php'); ?>
      <form method="post" enctype="multipart/form-data">
	     <h4> Field with (<span class="star" >*</span>) are mandatory</h4>
		 
		 <span class="error" id="error_first"></span>
	     <p class="label">First Name:<br/><input type="text" name="firstname" id="firstname" placeholder="Enter your Firstname" value=<?php if(isset($_POST['firstname']))echo $_POST['firstname'];?>><span class="star">*</span></p>
		 
		 <span class="error" id="error_last"></span>
		 <p class="label">Last Name:<br/><input type="text" name="lastname" id="lastname" placeholder="Enter your Lastname" value=<?php if(isset($_POST['lastname']))echo $_POST['lastname'];?>></p>
		 
		 <span class="error" id="error_user"></span>
	     <p class="label">Username:<br/><input type="text" name="username" id="username" placeholder="Enter a User Name" value=<?php if(isset($_POST['username']))echo $_POST['username'];?>><span class="star">*</span></p>
		 
		 <span class="error" id="error_email"></span>
		 <p class="label">Email:<br/><input type="email" name="email" id="email" placeholder="Enter your Email" value=<?php if(isset($_POST['email']))echo $_POST['email'];?>><span class="star">*</span> </p>
		 
		 <span class="error" id="error_pass"></span>
	     <p class="label">Password:<br/><input type="password" name="password" id="password" placeholder="Enter Your Password"><span class="star">*</span></p>
		 
		 <span class="error" id="error_confirm_pass"></span>
		 <p class="label">Confirm Password:<br/><input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Your Password"><span class="star">*</span></p>
		 
		 <p class="label">Phone Number:<br/><input type="text" name="phone" id="phone" placeholder="Enter your phone number" value=<?php if(isset($_POST['phone'])) echo $_POST['phone'];?>></p>
		 <p class="label">Upload Image:<br/><input type="file" name="file_upload" value=""> </p>
		 <p class="label">Gender:<br/><input type="radio" name="gender" value="Male" checked>Male
		  <input type="radio" name="gender" value="Female">Female
		 </p>
		 <input type="Submit" name="submit" value="Create user">
	  </form>
	  <br/>
	    <a href="index.php">Back to login page</a>
	</div> 
   </body>
</html>
