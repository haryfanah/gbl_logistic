<?php 
	include('Database.php');
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$suppr = $db->prepare('DELETE from categorie where id_cat=?');
		$suppr->execute(array($id));
		header('location:../main.php?page=pages/accueil');
	}
 ?>