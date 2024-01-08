<?php 
	session_start();
	$actif = $_SESSION['actif'];
	include('Database.php');
	if(isset($_POST['id_cat'],$_POST['designation'],$_POST['quantite'],$_POST['marque'],$_POST['ref'],$_POST['couleur'],$_POST['etat'],$_POST['type'],$_POST['remarque']))
	{
		$id_cat = $_POST['id_cat'];
		$designation = $_POST['designation'];
		$qte = $_POST['quantite'];
		$marque = $_POST['marque'];
		$ref = $_POST['ref'];
		$couleur = $_POST['couleur'];
		$etat = $_POST['etat'];
		$type = $_POST['type'];
		$remarque = $_POST['remarque'];

		$insert = $db->prepare('INSERT into tools(designation,quantite,marque,reference,couleur,id_etat,id_type,id_cat,id_user,date_tool,remarque) values (?,?,?,?,?,?,?,?,?,NOW(),?)');
		$insert->execute(array($designation,$qte,$marque,$ref,$couleur,$etat,$type,$id_cat,$actif,$remarque));
		header('location:../main.php?page=pages/categorie&msg=1&id='.$id_cat);

	}else{
		header('location:../main.php?page=pages/categorie&msg=2&id='.$id_cat);
	}
 ?>