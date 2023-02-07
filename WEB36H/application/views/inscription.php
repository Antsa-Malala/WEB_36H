<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inscription</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/bootstrap/css/bootstrap.min.css?h=f1a8fe9e98944b9d682ec5c3efac8f17"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/css/Login-Form-Basic-icons.css?h=69d67130ec73590f73431b743492baa5"); ?>">
  </head>
  <body>
    <section class="position-relative py-4 py-xl-5">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-8 col-xl-6 text-center mx-auto">
            <h2>Takalo-takalo</h2>
            <p class="w-lg-50">Inscription d'un nouveau membre de Takalo-takalo.</p>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="col-md-6 col-xl-4">
            <div class="card mb-5">
              <div class="card-body d-flex flex-column align-items-center">
                <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-file-earmark-person">
  <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z"></path>
</svg>
</div>
<form class="text-center" method="post" style="width: 261.8px;height: 253px;" action="<?php echo base_url("Inscription/inscrire");?>">
<div class="mb-3">
  <input class="form-control" type="text" name="nom" placeholder="Entrer votre nom" required>
</div>
<div class="mb-3">
  <input class="form-control" type="text" name="prenom" placeholder="Entre votre prenom" required>
</div>
<div class="mb-3">
<input class="form-control" type="text" name="nom_utilisateur" style="position: relative;" placeholder="Entrer votre nom d'utilisateur" required>
</div>
<div class="mb-3">
<input class="form-control" type="password" style="position: relative;display: block;overflow: hidden;" placeholder="Entrer votre Mot de Passe" name="mot_de_passe" required>
</div>
<button class="btn btn-success" type="submit">S'inscrire</button>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<script src="<?php echo base_url("assets/assets/bootstrap/js/bootstrap.min.js?h=01bb7ae0c0b11509558f2aa83f244399") ?>"></script>
</body>
</html>