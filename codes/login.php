<?php 
	include('Database.php');
	if(!empty($_POST['pseudo']) && !empty($_POST['mdp']))
	{
		$pseudo = $_POST['pseudo'];
		$mdp = $_POST['mdp'];
		$users = $db->prepare('SELECT * from users where pseudo = ? and mdp=?');
		$users->execute(array($pseudo,$mdp));
		if($users->rowCount() == 1)
		{
			session_start();
			$user_actif = $db->prepare('SELECT * from users where pseudo=? and mdp=?');
			$user_actif->execute(array($pseudo,$mdp));
			$user = $user_actif->fetch();
			$_SESSION['actif'] = $user['id_user'];

			header('location:../main.php');

		}else{
			header('location:../index.php?msg=incorrect');
		}
	}
 ?>