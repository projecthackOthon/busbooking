<?php include('config.php') ?>
<?php
	if(isset($_POST['reg_user']))
	{
		$depo_id = $_POST['depo_Id'];
		$depo_name = $_POST['depo_name'];
		$password = $_POST['pwd'];
		$sql = "INSERT INTO reg_user(depo_id,depo_name,depo_pass) VALUES('$depo_id','$depo_name','$password')";
		$query = mysqli_query($conn,$sql);
		if($query)
		{
			header('Location:index.php');
		}
		else
		{
			echo "<h3>Error in Registration</h3>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration || Pravasan </title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 <div class="loginbox">
  <img src="css/avatar.png" class="avatar">
  	<h1>Register</h1>
    <form method="post" action="<?php $_PHP_SELF ?>">
  	 <font size="2px"><p>Name</p>
  	  <input type="text" name="username" placeholder="Enter Name" style="font-size:15px" required />
  	  <p>Email</p>
      <input type="text" name="email" placeholder="Enter Email Address" style="font-size:15px" required />
      <p>Phone Number</p>
  	  <input type="text" name="ph_no" placeholder="Enter Phone Number" style="font-size:15px" required />
  	  <p>Password</p>
  	  <input type="password" name="pwd" placeholder="Enter Password" style="font-size:15px" required /> 
  	  <input type="submit" class="btn" name="reg_user" value="Register" />
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
    <br/><center><a href="index.php">Home</a>
  </div>
  </form>
</body>
</html>