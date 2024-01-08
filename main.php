<?php 
	session_start();
	if(!isset($_SESSION['actif'])){
		header('location:index.php');
	}else{
	include('layout/header.php');

	$page = 'pages/accueil';
	if(isset($_GET['page']))
	{
		$page = $_GET['page'];
	}
	include($page.'.php');

	include('layout/footer.php');
	}
?>