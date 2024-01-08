<div class="container">
	<?php 
		if(isset($_POST['re']) && !empty($_POST['re']))
		{
		$re = htmlspecialchars($_POST['re']);
		$recherche = $db->query('SELECT * from tools where CONCAT(designation,marque,remarque) like "%'.$re.'%"');
		if($recherche->rowCount() > 0)
		{
	 ?>
	<div class="text-center" style="border-bottom: 1px solid black;">
		<h4>Résultat pour : <span><strong><?php echo $re ?></strong></span></h4>
	</div>

	<?php 
	
		
		

		while($re = $recherche->fetch())
		{
			echo $re['designation'].'<br/>';
			
			
		}
		}else{
			echo '<div class="text-center">
					<h4>Accun résultat pour : <span class="text-danger"><strong>'.$re.'</strong></span></h4>
				</div>';
		}
	}
 ?>
</div>