<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Ost Magazine
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>GBL Logistique</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="layout/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="layout/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="layout/css/elegant-icons-style.css">
<script type="text/javascript" src="layout/js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="layout/js/bootstrap.bundle.min.js"></script>
</head>
<?php 
include('codes/Database.php'); 

$id_user = $_SESSION['actif'];
$users = $db->prepare('SELECT * from users where id_user =?');
$users->execute(array($id_user));
$user = $users->fetch();
?>
<body >
<style type="text/css">
  .bg-dark-purple{background: #0D0221;} .bg-dark-cyan{background: #368F8B;} .bg-denim{background: #2E5EAA;} .white{color:white;}
</style>
  <header class="navbar navbar-expand-md navbar-light bg-dark-purple">
    <a href="">
      <img src="images/logo.png" alt="logo" style="width:1cm;">
    </a>
    <span class="navbar-text" style="color: #EAE0D5;">Global Business Line</span>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-content">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-content">
      <form action="main.php?page=codes/recherche" method="POST" class="ml-2">
          <div class="input-group">
            <input type="text" name="re" placeholder="Rechercher..." class="form-control">
            <div class="input-group_append">
              <button class="btn btn-primary">Recherche</button>
            </div>
          </div>
      </form>
      <nav class="ml-auto">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: #EAE0D5;"><strong><i class="fa fa-user"></i> <?php echo $user['pseudo']; ?></strong></a>
            <ul class="dropdown-menu">
              <li class="dropdown-item"><a href="codes/logout.php">Déconnecter</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="main.php?page=pages/materiels_par_equipe" class="nav-link" style="color: #EAE0D5;"><strong>Matériels par équipe</strong></a>
          </li>
          <li class="nav-item">
            <a href="main.php?page=pages/accueil" class="nav-link" style="color: #EAE0D5;"><strong>Stock</strong></a>
          </li>
          <li class="nav-item dropleft">
            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: #EAE0D5;"><strong>Suivi</strong></a>
            <ul class="dropdown-menu">
              <li class="dropdown-item"><a href="main.php?page=pages/entree">Entrée</a></li>
              <li class="dropdown-item"><a href="main.php?page=pages/sortie">Sortie</a></li>
            </ul>
          </li>
      </ul>
    </nav>
    </div>
    
  </header>
<!-- ####################################################################################################### -->