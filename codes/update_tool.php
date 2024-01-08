<?php 
	session_start();
	$actif = $_SESSION['actif'];
	include('Database.php');
	
	if(isset($_POST['idTool'],$_POST['id'],$_POST['designation'],$_POST['qte'],$_POST['marque'],$_POST['ref'],$_POST['couleur'],$_POST['etat'],$_POST['type'],$_POST['remarque'],$_POST['update_date']))
	{
		$idTool = $_POST['idTool'];
		$id = $_POST['id'];
		$designation = $_POST['designation'];
		$qte = $_POST['qte'];
		$marque = $_POST['marque'];
		$ref = $_POST['ref'];
		$couleur = $_POST['couleur'];
		$etat = $_POST['etat'];
		$type = $_POST['type'];
		$remarque = $_POST['remarque'];
		$update_date = $_POST['update_date'];
		$update_tool = $db->prepare('UPDATE tools set designation=?, quantite=?, marque=?, reference=?, couleur=?, id_etat=?, id_type=?, id_user=?, remarque=?, date_modification =? where id_tool=?');
		$update_tool->execute(array($designation,$qte,$marque,$ref,$couleur,$etat,$type,$actif,$remarque,$update_date,$idTool));
		header('location:../main.php?page=pages/categorie&msg=updated&id='.$id);
		

	}else{
		header('location:../main.php?page=pages/categorie&msg=update_error&id='.$id);
	}
 ?>