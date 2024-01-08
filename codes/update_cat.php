<?php 
	include('Database.php');
	if(isset($_POST['id'],$_POST['nom_cat']))
	{
		$id = $_POST['id'];
		$nom_cat = $_POST['nom_cat'];
		$update_cat = $db->prepare('UPDATE categorie set nom_cat=?, update_date_cat= NOW() where id_cat=?');
		$update_cat->execute(array($nom_cat,$id));
		echo "mis à jour éffectué";
		header('location:../main.php?page=pages/accueil&updated=1');
	}else{
		header('location:../main.php?page=pages/accueil&updated=2');
	}
 ?>