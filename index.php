<?php 
    session_start();
    if(isset($_SESSION['actif']))
    {
      header('location:main.php');
    }else{ 
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="layout/css/bootstrap.css">
</head>
<body>

  <style type="text/css">
    .login{
      border: 1px solid grey;
      border-radius: 5px;
    }
  </style>
  <div class="container">
    <div class="row mt-5">
      <div class="offset-sm-3 offset-lg-4 offset-md-3 col-lg-4 col-md-6 col-sm-6">
        <div class="login">
          
          <form action="codes/login.php" method="POST" class="p-4">
            <?php 
              if (isset($_GET['msg'])) {
                if($_GET['msg'] == "incorrect")
                {
              
             ?>
              <div class="alert alert-danger text-center">
                <p class="text-danger">Informations Incorrect</p>
              </div>
            <?php }} ?>
            <div class="form-group">
              <label>Pseudo</label>
              <input type="text" name="pseudo" class="form-control" placeholder="Pseudo..." required="">
            </div>
            <div class="form-group">
              <label>Mot de passe</label>
              <input type="password" name="mdp" class="form-control" placeholder="Mot de passe..." required="">
            </div>
            <button type="submit" class="btn btn-primary">CONNEXION</button>
           
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<?php } ?>