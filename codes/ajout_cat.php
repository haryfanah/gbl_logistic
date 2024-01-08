<?php 
	include('Database.php');
	if(isset($_POST['nom_cat']))
	{
		$nom = $_POST['nom_cat'];
		// $save_date = NOW();
		$insert = $db->prepare('INSERT into categorie(nom_cat,date_cat) values (?,NOW())');
		$insert->execute(array($nom));

		header('location:../main.php?page=pages/accueil&msg=1');
	}else{
		header('location:../main.php?page=pages/accueil&msg=2');
	}
 ?>