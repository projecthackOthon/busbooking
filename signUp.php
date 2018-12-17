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
			echo "data in";
			header('Location:index.php');
		}
		else
		{
			echo "not in";
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="<?php $_PHP_SELF ?>">
  	
  	<div class="input-group">
  	  <label>Depo Id</label>
  	  <input type="text" name="depo_Id" required>
  	</div>
  	<div class="input-group">
  	  <label>Depo Name</label>
  	  <input type="text" name="depo_name" required>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="pwd" required> 
  	</div>
  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="index.php">Sign in</a>
  	</p>
  </form>
</body>
</html>