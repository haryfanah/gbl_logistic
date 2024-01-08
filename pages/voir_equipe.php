<?php 
	if(isset($_GET['idSup']))
	{
		$id = $_GET['idSup'];
		$selection = $db->prepare('SELECT * from superviseurs where id_sup =?');
		$selection->execute(array($id));
		$sup = $selection->fetch();
		
	}
 ?>
 <div class="container">
 	<div class="row">
 		<div class="col-12 col-lg-9 ">
 			<div style="border-bottom: 1px solid grey;">
 				<h3 class="h4">Matériels <?php echo $sup['nom_sup']; ?></h3>
 			</div>
 			
 			<div class="row">
          <?php 
            $tools = $db->query('SELECT * from tools tol join etat e join types ty on tol.id_etat=e.id_etat and tol.id_type=ty.id_type  where id_sup='.$id);
            while($tool = $tools->fetch()){
              
           ?>
           		<div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2">
           			<section class="card">
           				<a href="#" data-toggle="modal" data-target="#img<?php echo $tool['id_tool']; ?>">
           					<?php if(isset($tool['image'])){ ?>
                			<img src="images/uploads/<?php echo $tool['image']; ?>" alt="" / style="width:125px; height: 125px;"></a>
              
           					<?php }else{ ?>
                			<img src="images/demo/125x125.gif" alt="" /></a>
              				<?php } ?>
           				</a>
           				<div class="card-header">
           					<h1 class="h6 card-title"><?php echo $tool['designation']; ?></h1>
           				</div>
           				<div class="row ml-1">
                			<div class="col-12 col-md-6">
                			  <label>Qauntité(s):</label>
                			</div>
                			<div class="col-12 col-md-6">
                			  <div class="">
                			    <span class=""><strong><?php echo $tool['quantite']; ?></strong></span>
                			  </div>
                			</div>
              			</div>

              			<div class="row ml-1">
                			<div class="col-12 col-md-6">
                			  <label>Marque:</label>
                			</div>
                			<div class="col-12 col-md-6">
                  
                    			<span class=""><?php echo $tool['marque']; ?></span>
                  
                			</div>
              			</div>

              			<div class="row ml-1">
                			<div class="col-12 col-md-6">
                  				<label>Référence:</label>
                			</div>
                			<div class="col-12 col-md-6">
                  
                    			<span class=""><?php echo $tool['reference']; ?></span>
                  
                			</div>
              			</div>

              			<div class="row ml-1">
                			<div class="col-12 col-md-6">
                  				<label>Couleur:</label>
                			</div>
                			<div class="col-12 col-md-6">
                    			<span class=""><?php echo $tool['couleur']; ?></span>
                			</div>
              			</div>

              			<div class="row ml-1">
                			<div class="col-12 col-md-6">
                  				<label>Etat:</label>
                			</div>
                			<div class="col-12 col-md-6">
                    			<span class=""><?php echo $tool['etat']; ?></span>
                			</div>
              			</div>

              			<div class="row ml-1">
                			<div class="col-12 col-md-6">
                  				<label>Type:</label>
                			</div>
                			<div class="col-12 col-md-6">
                			    <span class=""><?php echo $tool['type_name']; ?></span>
                			</div>
              			</div>

              			<div class="row ml-1">
                			<div class="col-12 col-md-6">
                			  	<label>Remarque:</label>
                			</div>
                			<div class="col-12 col-md-6">
                    			<span class=""><?php echo $tool['remarque']; ?></span>
                			</div>
              			</div>
              			<div class="row ml-1 mb-2">
              				<div class="col-12 col-md-6">
              					<a href="main.php?page=pages/categorie&idTool=<?php echo $tool['id_tool'].'&id='.$tool['id_cat']; ?>" class="btn btn-primary">Voir l'emplacement</a>
              				</div>
              			</div>
              			<!-- <div class="row ml-1 mb-2">
              				<div class="col-12 col-md-6">
                 				<a href="main.php?page=pages/edit_tool&idTool=<?php echo $tool['id_tool']; ?>&id=<?php echo $id ?>"  class="mr-3 btn btn-primary">edit</a>
                			</div>
                			<div class="col-12 col-md-6">
                   				<a href="codes/sup_tool.php?idTool=<?php echo $tool['id_tool']; ?>&id=<?php echo $id; ?>" class="btn btn-danger" onclick='return confirm("Êtes-vous sûr?")'>supprimer</a>
                			</div>
              			</div> -->
					 
					</section>
           		</div>
           	     
            <div class="modal" id="img<?php echo $tool['id_tool']; ?>">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="h5 modal-title"><?php echo $tool['designation']; ?></h1>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                  	<div>
                  		<img src="images/uploads/<?php echo $tool['image']; ?>" alt="" / style="max-width:470px;"></a>
                  	</div>
                    <form action="codes/upload.php" method="POST" enctype="multipart/form-data">
                      <div class="input-group">
                        <label>Séléctionner une image:</label><br>
                        <input type="hidden" name="idTool" value="<?php echo $tool['id_tool']; ?>">
                        <input type="hidden" name="id" value="<?php echo $tool['id_cat']; ?>">
                        <input type="hidden" name="idSup" value="<?php echo $tool['id_sup']; ?>">
                        <input type="file" name="fileUploaded" class="btn bg-dark" required="">
                        <button type="submit" class="input-group-append btn btn-secondary" name="submit">Télécharger</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
       		</div>

 		</div>
 		<div class="col-12 col-lg-3 ">
 			<div class="text-center" style="border-bottom: 1px solid grey;">
 				<h3 class="h4">Ajout Matériel</h3>
 			</div>

 			<form action="codes/ajout_tools_equipe.php" method="POST">
 			
 			<div class="text-center">
 				<label>Catégorie</label>
 			</div>
          <select class="form-control mt-2" name="categorie">
          <?php 
            $categories = $db->query('SELECT * from categorie order by nom_cat');
            while($categorie = $categories->fetch()){
           ?>
              <option value="<?php echo $categorie['id_cat']; ?>"><?php echo $categorie['nom_cat']; ?></option>
           <?php } ?>
           <option value="autre">--- Autres catégorie ---</option>
           </select>
 			
 			<input type="text" name="autre" placeholder="Autre catégorie" class="form-control mt-2">
          <input type="hidden" name="id_sup" value="<?php echo $sup['id_sup']; ?>">

          <div class="text-center mt-2">
          	<label>Matériel</label>
          </div>

          <input class="form-control " type="text" name="designation" placeholder="Designation...">
          <input class="form-control mt-2" type="text" name="quantite" placeholder="Quanté...">
          <input class="form-control mt-2" type="text" name="marque" placeholder="Marque...">
          
          <input class="form-control mt-2" type="text" name="ref" placeholder="Référence...">
          <input class="form-control mt-2" type="text" name="couleur" placeholder="Couleur...">
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
             
           </textarea>

          <button class="btn btn-primary mt-3">Ajouter</button>
        </form>
 		</div>
 	</div>
 </div>