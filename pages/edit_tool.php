<div class="container">
	<?php 
		if(isset($_GET['idTool'],$_GET['id']))
		{
			$idTool = $_GET['idTool'];
			$id = $_GET['id'];
			$update_tool = $db->prepare('SELECT * from tools where id_tool=?');
			$update_tool->execute(array($idTool));
			$tool = $update_tool->fetch();
			
		}
	 ?>
	 <form action="codes/update_tool.php" method="POST">
	 <div class="row">
	 	<div class="col-12 col-lg-3"></div>
	 	<div class="col-12 col-lg-3">
	 			<input type="hidden" name="idTool" value="<?php echo $idTool; ?>">
	 			<input type="hidden" name="id" value="<?php echo $id; ?>">
	 			<label>Désignation:</label>
	 			<input class="form-control" type="text" name="designation" value="<?php echo $tool['designation']; ?>">
	 			<label>Quantité:</label>
	 			<input class="form-control mt-2" type="text" name="qte" value="<?php echo $tool['quantite']; ?>">
	 			<label>Marque:</label>
	 			<input class="form-control mt-2" type="text" name="marque" value="<?php echo $tool['marque']; ?>">
	 			<label>Référence:</label>
	 			<input class="form-control mt-2" type="text" name="ref" value="<?php echo $tool['reference']; ?>">

	 			<label>Date de modification:</label>
	 			<input type="date" name="update_date" required="" class="form-control">
	 		
	 	</div>
	 	<div class="col-12 col-lg-3">
	 			<label>Couleur:</label>
	 			<input class="form-control" type="text" name="couleur" value="<?php echo $tool['couleur']; ?>">
	 			<label>Etat:</label>
          		<select class="form-control mt-2" name="etat">
          		<?php 
            		$etats = $db->query('SELECT * from etat');
            		while($etat = $etats->fetch()){
           		?>
              		<option value="<?php echo $etat['id_etat']; ?>"><?php echo $etat['etat']; ?></option>
           		<?php } ?>
           		</select>

           		<label>Types:</label>
           		<select class="form-control mt-2" name="type">
            	<?php 
              		$types = $db->query('SELECT * from types');
              		while($type = $types->fetch()){
            	?>
              	<option value="<?php echo $type['id_type']; ?>"><?php echo $type['type_name']; ?></option>
            	<?php } ?>
           		</select>
           		<label class="mt-2">Remarque:</label>
           		<textarea name="remarque" class="form-control">
             		<?php echo $tool['remarque']; ?>
           		</textarea>
	 	</div>
	 </div>
	 	<div class="row mt-3">
	 		<div class="text-center col-12 col-lg-12">
	 			<button type="submit" class="btn btn-primary">Mettre à jour</button>
	 		</div>
	 	</div>
	 </form>
</div>