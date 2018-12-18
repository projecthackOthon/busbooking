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
  	 <font size="2px"><p>Depo Id</p>
  	  <input type="text" name="depo_Id" placeholder="Enter Depo_Id" style="font-style:italic" required />
  	  <p>Depo Name</p>
  	  <input type="text" name="depo_name" placeholder="Enter Depo_Name" style="font-style:italic" required />
  	  <p>Password</p>
  	  <input type="password" name="pwd" placeholder="Enter Password" style="font-style:italic" required /> 
  	  <input type="submit" class="btn" name="reg_user" value="Register" />
  	<p>
  		Already a member? <a href="index.php">Sign in</a>
  	</p>
  </div>
  </form>
</body>
</html>