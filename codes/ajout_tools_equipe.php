<?php 
	session_start();
	$id_user = $_SESSION['actif'];
	include('Database.php');
	if(isset($_POST['id_sup'],$_POST['designation'],$_POST['quantite'],$_POST['marque'],$_POST['ref'],$_POST['couleur'],$_POST['etat'],$_POST['type'],$_POST['remarque'],$_POST['categorie'],$_POST['autre']))
	{
		$id_sup = $_POST['id_sup'];
		$designation = $_POST['designation'];
		$qte = $_POST['quantite'];
		$marque = $_POST['marque'];
		$ref = $_POST['ref'];
		$couleur = $_POST['couleur'];
		$etat = $_POST['etat'];
		$type = $_POST['type'];
		$remarque = $_POST['remarque'];
		$categorie = $_POST['categorie'];
		$autre = $_POST['autre'];
		if($categorie == "autre")
		{
			echo "veuillez entrer une autre catégorie";
			$insert = $db->prepare('INSERT into categorie(nom_cat,date_cat) values (?,NOW())');
			$insert->execute(array($autre));

			$get_id = $db->query('SELECT * from categorie order by id_cat desc');
			$last_id = $get_id->fetch();
			$lastIdCat = $last_id['id_cat'];

			$insert = $db->prepare('INSERT into tools(designation,quantite,marque,reference,couleur,id_etat,id_type,id_cat,id_user,date_tool,remarque,id_sup) values (?,?,?,?,?,?,?,?,?,NOW(),?,?)');
			$insert->execute(array($designation,$qte,$marque,$ref,$couleur,$etat,$type,$lastIdCat,$id_user,$remarque,$id_sup));
			header('location:../main.php?page=pages/voir_equipe&idSup='.$id_sup);
		}else{
			$insert = $db->prepare('INSERT into tools(designation,quantite,marque,reference,couleur,id_etat,id_type,id_cat,id_user,date_tool,remarque,id_sup) values (?,?,?,?,?,?,?,?,?,NOW(),?,?)');
			$insert->execute(array($designation,$qte,$marque,$ref,$couleur,$etat,$type,$categorie,$id_user,$remarque,$id_sup));
			
			header('location:../main.php?page=pages/voir_equipe&msg=1&idSup='.$id_sup);
		}
		
		

	}else{
		// header('location:../main.php?page=pages/categorie&msg=2&id='.$id_cat);
	}
 ?>