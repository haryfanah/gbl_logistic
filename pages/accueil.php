<!-- <div class="wrapper col2">
  <div id="featured_slide">
    <div class="featured_box">
      
      
      <img src="images/1.jpeg" alt="" /> </div>
    <div class="featured_box">
      
      
      <img src="images/2.jpeg" alt="" /> </div>
    <div class="featured_box">
      
      
      <img src="images/demo/930x375.gif" alt="" /> </div>
    <div class="featured_box">
      
      
      <img src="images/demo/930x375.gif" alt="" /> </div>
    <div class="featured_box">
      
      
      <img src="images/demo/930x375.gif" alt="" /> </div>
  </div>
</div> -->
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div class="container">
    <div class="content">
      <?php 
        $listes = $db->query('SELECT * from categorie order by nom_cat');
      ?>

      <div id="latestnews">
        <h2>Liste des Matériels</h2>
        <?php 
          if(isset($_GET['updated']))
          {
            if($_GET['updated'] == 1)
            {
         ?>
        <div class="alert alert-success">
          <label class="">Modification éffectué</label>
        </div>
        <?php   }else{ ?>
        <div class="alert alert-success">
          <label class="">Not found</label>
        </div>
      <?php }} ?>
        <ul>
          <?php while($liste = $listes->fetch()){ ?>
          <li>
            <div class="imgholder"><a href="#"><img src="images/demo/125x125.gif" alt="" /></a></div>
            <div class="latestnews">
              <h2><?= $liste['nom_cat']; ?></h2>
              <!-- <p>This is a W3C standards compliant free website template from <a href="http://www.os-templates.com/">OS Templates</a>. This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>, which allows you to use and modify the template for both personal and commercial use when you keep the provided credit links in the footer. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p> -->
              
              <p class="readmore"><a class="btn btn-primary" href="main.php?page=pages/categorie&id=<?php echo $liste['id_cat']; ?>">Ouvrir  </a></p>
              <a href="main.php?page=pages/edit_cat&id=<?php echo $liste['id_cat']; ?>" class="mr-3">edit</a> <a href="codes/suppression.php?id=<?php echo $liste['id_cat']; ?>" onclick='return confirm("Êtes-vous sur?")'>supprimer</a>
            </div>
            <br class="clear" />
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <div class="column">
      <div class="sponsors">
        <h2>Ajout catégorie</h2>
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
        <form action="codes/ajout_cat.php" method="POST">
          <input class="form-control" type="text" name="nom_cat" placeholder="Nom catégorie..." required=""></input>
          <button class="btn btn-primary mt-3">Ajouter</button>
        </form>
        <h2 class="mt-3">Dernier enregistrement</h2>
        <div class="row">
          <div class="col-12 col-lg-12">
            <table class="table">
              <?php 
                  
                  $last = $db->query('SELECT * from categorie order by id_cat desc limit 5');
                  while($l = $last->fetch()){ 
                ?>
              <tr>
                  <td><?php echo $l['nom_cat']; ?></td>
                  <td><?php $date = $l['date_cat']; echo $date; ?></td>
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
<!-- ####################################################################################################### -->
