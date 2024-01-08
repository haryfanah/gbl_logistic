<?php 
include('Database.php');
$target_dir = "../images/uploads/";
$target_file = $target_dir . basename($_FILES["fileUploaded"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $idSup = $_POST['idSup'];
  
  $check = getimagesize($_FILES["fileUploaded"]["tmp_name"]);
  if($check !== false) {
    echo "Le fichier est une image - " . $check["mime"] . ".";
    
    $uploadOk = 1;
  } else {
    echo "Le fichier n'est pas une image";
    $uploadOk = 0;
  }
}

// Check if file already exists
// if (file_exists($target_file)) {
//   echo "Désolé, Le fichier est déjà dans la base.";
//   $uploadOk = 0;
// }
if ($_FILES["fileUploaded"]["size"] > 50000000) {
  echo "Désolé, le fichier est trop large.";
  $uploadOk = 0;
}elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Désolé, seul JPG, JPEG, PNG & GIF sont accépter.";
  $uploadOk = 0;
}elseif ($uploadOk == 0) {
  echo "Désolé, erreur de téléchargement.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileUploaded"]["tmp_name"], $target_file)) {
    // ecsho "The file ". htmlspecialchars( basename( $_FILES["fileUploaded"]["name"])). " has been uploaded.";
  	$upload = $db->prepare('UPDATE superviseurs set pdp=? where id_sup= ?');
  	$upload->execute(array($_FILES['fileUploaded']['name'],$idSup));
    
      header('location:../main.php?page=pages/materiels_par_equipe');
   
    
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
	
 ?>