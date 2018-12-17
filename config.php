<?php
$db_username = 'root';
$db_password = '';
$db_hostname = 'localhost';
$db_name = 'buswale';

$conn = mysqli_connect($db_hostname,$db_username,$db_password);

if($conn)
{
	if(mysqli_select_db($conn,$db_name))
	{
		
	}
}
