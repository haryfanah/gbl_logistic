<?php 
	session_start();
	if(isset($_SESSION['actif']))
	{
		if(session_destroy())
		{
			unset($_SESSION['actif']);
			header('location:../index.php');
		}
	}
	
 ?>