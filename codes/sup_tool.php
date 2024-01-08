<?php 
	include('Database.php');
	if(isset($_GET['idTool'],$_GET['id']))
	{
		$idTool = $_GET['idTool'];
		$id = $_GET['id'];
		$sup_tool = $db->prepare('DELETE from tools where id_tool=?');
		$sup_tool->execute(array($idTool));
		header('location:../main.php?page=pages/categorie&id='.$id);
	}
 ?>