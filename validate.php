<?php include('config.php') ?>
<?php
if (isset($_POST['login'])) 
	{
  		$username = $_POST['u_name'];
  		$password = $_POST['pwd'];
  		$query = "SELECT depo_id, depo_pass FROM reg_user WHERE depo_id='$username' AND depo_pass='$password'";
  		$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) 
  		{
  	    header('location: homePage.php');
  		}
  	else 
  		{
  		array_push($errors, "Wrong username/password combination");
  		header('location: index.php');
  		}
  }
 ?>


