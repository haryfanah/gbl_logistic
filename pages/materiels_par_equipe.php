<div class="container">
	<div class="row">
		<div class="col-12 col-lg-12 col-sm-12 col-md-12">
			<div class="row">
          <?php 
            $superviseurs = $db->query('SELECT * from superviseurs');
            while($sup = $superviseurs->fetch()){
              
           ?>
           		<div class="col-12 col-lg-3 col-md-3 col-sm-3 mt-2">
           			<section class="card">
           				<a href="#" data-toggle="modal" data-target="#img<?php echo $sup['id_sup']; ?>">
           					<?php if(isset($sup['pdp'])){ ?>
                			<img src="images/uploads/<?php echo $sup['pdp']; ?>" alt="" / style="width:125px; height: 125px;"></a>
              
           					<?php }else{ ?>
                			<img src="images/demo/125x125.gif" alt="" /></a>
              				<?php } ?>
           				</a>
           				<div class="card-header">
           					<h1 class="h6 card-title"><?php echo $sup['nom_sup']; ?></h1>
           				</div>
           				<div class="row pl-1">
           					<div class="col-12 col-md-3">
								<label>CIN:</label>
							</div>
							<div class="col-12 col-md-9">
								<label><?php echo $sup['CIN']; ?></label>
							</div>
           				</div>
           				<div class="row pl-1">
           					<div class="col-12 col-md-3">
								<label>Tél:</label>
							</div>
							<div class="col-12 col-md-9">
								<label><?php echo $sup['num_tel']; ?></label>
							</div>
           				</div>
						<div class="mb-1">
							<a href="main.php?page=pages/voir_equipe&idSup=<?php echo $sup['id_sup']; ?>" class="ml-1 btn btn-primary">Voir</a>
							
						</div>
					</section>
           		</div>
           	     
            <div class="modal" id="img<?php echo $sup['id_sup']; ?>">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="h5 modal-title"><?php echo $sup['nom_sup']; ?></h1>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form action="codes/upload_profil.php" method="POST" enctype="multipart/form-data">
                      <div class="input-group">
                        <label>Séléctionner une image:</label><br>
                        <input type="hidden" name="idSup" value="<?php echo $sup['id_sup'] ?>">
                        <input type="file" name="fileUploaded" class="btn bg-dark">
                        <input type="submit" class="input-group-append btn btn-secondary" name="submit" value="Télécharger">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
       		</div>
		</div>
		
	</div>
</div>