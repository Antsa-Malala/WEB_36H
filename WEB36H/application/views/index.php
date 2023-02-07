<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inscription</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/bootstrap/css/bootstrap.min.css?h=f1a8fe9e98944b9d682ec5c3efac8f17"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/css/Login-Form-Basic-icons.css?h=befd8a398792e305b7ffd4a176b5b585"); ?>">
  </head>
  <body>
    <section class="position-relative py-4 py-xl-5">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-8 col-xl-6 text-center mx-auto">
            <h2>Takalo-Takalo</h2>
            <p class="w-lg-50"></p>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="col-md-6 col-xl-4">
            <div class="card mb-5">
              <div class="card-body d-flex flex-column align-items-center">
                <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
</svg></div>
<form class="text-center" method="post" action="<?php echo base_url("Connexion/verifie/"); ?>">
  <div class="mb-3">
    <input class="form-control" type="text" name="nom_utilisateur" placeholder="Entrer votre nom d'utilisateur" value="user3">
  </div>
  <div class="mb-3">
    <input class="form-control" type="password" name="mot_de_passe" placeholder="Entrer votre Mot de Passe" value="password3">
  </div>
  <div class="mb-3">
  <button class="btn btn-primary d-block w-100" type="submit">Log In</button>
</div>
<a href="<?php echo base_url("Page/inscription");?>"><button class="btn btn-success" type="button" style="width: 209.5px;">S'inscrire</button></a>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js?h=01bb7ae0c0b11509558f2aa83f244399"); ?>">
</script>
</body>
</html>