<div class="container text-center">
	<?php 
		if(isset($_GET['id'])) 
		{
			$id = $_GET['id'];
			$edit_cat = $db->prepare('SELECT * from categorie where id_cat=?');
			$edit_cat->execute(array($id));
			$edit = $edit_cat->fetch();
		}
	?>
	<div style="border-bottom: 1px solid grey;">
		<h2>Edit <span class="text-secondary"><?php echo $edit['nom_cat']; ?></span></h2>	
	</div>
	<form class="mt-2" action="codes/update_cat.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input style=" height: 35px; " type="text" name="nom_cat" value="<?php echo $edit['nom_cat']; ?>">
		<button style="height: 35px; ">Modifier</button>
	</form>
</div>