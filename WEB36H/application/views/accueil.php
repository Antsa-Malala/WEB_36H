<?php 
$estAdmin=-1;
$mot_de_passe="";
$nom_utilisateur="";
if(isset($_SESSION['estAdmin'])&&isset($_SESSION['mot_de_passe'])&&isset($_SESSION['nom_utilisateur']))
{
    $estAdmin=$_SESSION['estAdmin'];
    $mot_de_passe=$_SESSION['mot_de_passe'];
    $nom_utilisateur=$_SESSION['nom_utilisateur'];
}
else{
    redirect(base_url("Page/deconnexion"));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Accueil </title>
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/bootstrap/css/bootstrap.min.css?h=63c49130f916e8761302328c73ff1917");?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/css/Projects-Grid-Horizontal-images.css?h=4f3cfa46e40e236365345fc77963f4b8");?>">
</head>

<body style="/*background: url(&quot;design.jpg&quot;);*/background-position: 0 -60px;">
    <?php $this->load->view('header'); ?>
    <section></section>
    <section></section>
    <section class="py-5 mt-5">
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Takalo-Takalo</h2>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2">
                <?php for($i=0;$i<count($zavatra);$i++) {?>
                <div class="col">
                    <div class="d-flex flex-column flex-lg-row">
                        <div class="w-100"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="<?php echo base_url("assets/sary/");?>" width="361" height="200"></div>
                        <div class="py-4 py-lg-0 px-lg-4">
                            <h4><?php echo $zavatra[$i]['nom'];?></h4>
                            <p><?php echo $zavatra[$i]['description'];?>&nbsp;<br>Prix Estimatif : <?php echo $zavatra[$i]['prix'];?><br>Categorie : <?php echo $zavatra[$i]['categorie'];?>&nbsp; <br>Utilisateur : <?php echo $zavatra[$i]['prenom'];?>&nbsp; &nbsp; &nbsp; &nbsp;<br></p><a href="<?php echo base_url("Page/mes_proposition");?>?p=<?php echo $zavatra[$i]['prix'];?>&id=<?php echo $zavatra[$i]['id'];?>&user=<?php echo $zavatra[$i]['idUtilisateur']; ?>"><button class="btn btn-primary" type="button">Proposer</button></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
  <?php $this->load->view('footer'); ?>
    <script src="<?php echo base_url("assets/assets/js/jquery.min.js?h=84e399b8f2181ccd73394fdeddff1638")?>"></script>
    <script src="<?php echo base_url("assets/assets/bootstrap/js/bootstrap.min.js?h=01bb7ae0c0b11509558f2aa83f244399")?>"></script>
    <script src="<?php echo base_url("assets/assets/js/bold-and-bright.js?h=914b066f52f5e2b2583e4d1558c90518");?>"></script>
</body>

</html>