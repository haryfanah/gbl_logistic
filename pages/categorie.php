<div class="wrapper col3">
  <div class="container">
    <div class="content">
      
      <?php 
        if(isset($_GET['id']))
        {
          $id = $_GET['id'];
          $categorie = $db->query('SELECT * from categorie where id_cat='.$id);
          $cat = $categorie->fetch();
        }
          
      ?>
      <div id="latestnews">
        <?php 
            $sum_qte = $db->query('SELECT *, SUM(quantite) as total from tools where id_cat='.$id);
            while($total = $sum_qte->fetch()){
         ?>
        <div class="bg-primary" style="color:#fff; border-radius: 50%; width: 25px; height: 25px; text-align: center;padding-bottom: 2px; padding-top: 0px; float: right;"><?php echo $total['total']; ?></div><?php } ?>
        <h2><?php echo $cat['nom_cat']; ?></h2> 
        
        <ul>
          <?php 
            $tools = $db->query('SELECT * from tools tol join etat e join types ty on tol.id_etat=e.id_etat and tol.id_type=ty.id_type  where id_cat='.$id);
            while($tool = $tools->fetch()){
              
           ?>
          <li>
            <div class="imgholder"><a href="#" data-toggle="modal" data-target="#img<?php echo $tool['id_tool']; ?>">
            <?php if(isset($tool['image'])){ ?>
                <img src="images/uploads/<?php echo $tool['image']; ?>" alt="" / style="width:3.3cm; height: 3.3cm;"></a>
              
            <?php }else{ ?>
                <img src="images/demo/imgl.gif" alt="" /></a>
              <?php } ?>
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
                      <img src="images/uploads/<?php echo $tool['image']; ?>" alt="" / style="max-width:470px;">
                    </div>
                    <form action="codes/upload.php" method="POST" enctype="multipart/form-data">
                      <div class="input-group">
                        <label>Séléctionner une image:</label><br>
                        <input type="hidden" name="idTool" value="<?php echo $tool['id_tool'] ?>">
                        <input type="hidden" name="id" value="<?php echo $cat['id_cat'] ?>">
                        <input type="file" name="fileUploaded" class="btn bg-dark" required="">
                        <button type="submit" class="input-group-append btn btn-secondary" name="submit">Télécharger</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
         
            <div class="latestnews">
              <h2><?php echo $tool['designation']; ?></h2> 

              <div class="row">
                <div class="col-12 col-md-6">
                  <label>Qauntité(s):</label>
                </div>
                <div class="col-12 col-md-6">
                  <div class="">
                    <span class=""><strong><?php echo $tool['quantite']; ?></strong></span>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 col-md-6">
                  <label>Marque:</label>
                </div>
                <div class="col-12 col-md-6">
                  
                    <span class=""><?php echo $tool['marque']; ?></span>
                  
                </div>
              </div>

              <div class="row">
                <div class="col-12 col-md-6">
                  <label>Référence:</label>
                </div>
                <div class="col-12 col-md-6">
                  
                    <span class=""><?php echo $tool['reference']; ?></span>
                  
                </div>
              </div>

              <div class="row">
                <div class="col-12 col-md-6">
                  <label>Couleur:</label>
                </div>
                <div class="col-12 col-md-6">
                    <span class=""><?php echo $tool['couleur']; ?></span>
                </div>
              </div>

              <div class="row">
                <div class="col-12 col-md-6">
                  <label>Etat:</label>
                </div>
                <div class="col-12 col-md-6">
                    <span class=""><?php echo $tool['etat']; ?></span>
                </div>
              </div>

              <div class="row">
                <div class="col-12 col-md-6">
                  <label>Type:</label>
                </div>
                <div class="col-12 col-md-6">
                    <span class=""><?php echo $tool['type_name']; ?></span>
                </div>
              </div>

              <div class="row">
                <div class="col-12 col-md-6">
                  <label>Remarque:</label>
                </div>
                <div class="col-12 col-md-6">
                    <span class=""><?php echo $tool['remarque']; ?></span>
                </div>
              </div>
              
              <!-- <p>This is a W3C standards compliant free website template from <a href="http://www.os-templates.com/">OS Templates</a>. This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>, which allows you to use and modify the template for both personal and commercial use when you keep the provided credit links in the footer. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p> -->
              
              
              <a href="main.php?page=pages/edit_tool&idTool=<?php echo $tool['id_tool']; ?>&id=<?php echo $id ?>"  class="mr-3 btn btn-primary">edit</a> <a href="codes/sup_tool.php?idTool=<?php echo $tool['id_tool']; ?>&id=<?php echo $id; ?>" class="btn btn-danger" onclick='return confirm("Êtes-vous sûr?")'>supprimer</a>
              
            </div>
            <br class="clear" />
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <div class="column">
      <div class="sponsors">
        <h2>Ajouter</h2>
        <!-- <div class="b_250"><a href="#"><img src="images/demo/250x250.gif" alt="" /></a></div>
        <div class="b_125">
          <ul>
            <li><a href="#"><img src="images/demo/125x125.gif" alt="" /></a></li>
            <li><a href="#"><img src="images/demo/125x125.gif" alt="" /></a></li>
            <li><a href="#"><img src="images/demo/125x125.gif" alt="" /></a></li>
            <li><a href="#"><img src="images/demo/125x125.gif" alt="" /></a></li>
            <li><a href="#"><img src="images/demo/125x125.gif" alt="" /></a></li>
            <li class="last"><a href="#"><img src="images/demo/125x125.gif" alt="" /></a></li>
          </ul>
          <div class="clear"></div>
        </div> -->
        <?php 
          if(isset($_GET['msg']))
          {
            if($_GET['msg']==1){
         ?>
        <div class="bg-success text-center">
          <p class="p-2 text-dark">Enregistrement avec succès</p>
        </div>
        <?php }elseif($_GET['msg']==2){?>
         <div class="bg-danger text-center">
          <p class="p-2 text-dark">Erreur d'enregistrement</p>
        </div> 
        <?php }}else{} ?>
        <form action="codes/ajout_tools.php" method="POST">
          <input type="hidden" name="id_cat" value="<?php echo $cat['id_cat']; ?>">
          <input class="form-control" type="text" name="designation" placeholder="Designation...">
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
        <h2 class="mt-3">Dernier enregistrement</h2>
        <div class="row">
          <div class="col-12 col-lg-12">
            <table class="table">
              <?php 
                  
                  $last = $db->query('SELECT * from tools order by id_tool desc limit 5');
                  while($l = $last->fetch()){ 
                ?>
              <tr>
                  <td><?php echo $l['designation']; ?></td>
                  <td><?php $date = $l['date_tool'];  echo $date; ?></td>
              </tr>
               <?php } ?>
            </table>
          </div>  
        </div>

      </div>
    </div>
    <br class="clear" />
  </div>
</div>