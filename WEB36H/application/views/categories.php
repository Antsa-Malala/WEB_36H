<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
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
    //redirect(base_url("Page/deconnexion"));
}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Categories</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/bootstrap/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/fonts/fontawesome-all.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/css/Features-Large-Icons-icons.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/css/Projects-Grid-Horizontal-images.css");?>">
</head>

<body style="/*background: url(&quot;design.jpg&quot;);*/background-position: 0 -60px;">
<?php $this->load->view('header'); ?>
    <section class="py-5">
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Categories</h2>
                    <p class="w-lg-50"></p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
                <?php for($i=0;$i<count($categorie);$i++)
                { ?>

                    <div class="col">
                    <div class="d-flex p-3">
                    <div class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon sm"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-journals">
                        <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"></path>
                        <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"></path>
                        </svg></div>
                        <div class="px-2">
                        <h5 class="mb-0 mt-1"></h5>
                        </div><a href="<?php echo base_url("Categorie_controller/liste_objet_categorie"); echo "/".$categorie[$i]['id']?>"><?php echo $categorie[$i]['categorie'];?></a>
                    </div>
                    </div>
                <?php } ?>
            </div>
            <?php if($estAdmin==1){?>
            <form action="<?php echo base_url("Categorie_controller/ajout_categorie");?>" method="post">
                <input class="border rounded border-1 border-dark" type="text" placeholder="Details" name="cate" style="width: 298px;height: 44.6px;margin: 15px;transform: perspective(0px);--bs-body-bg: #6e6e6e;text-align: left;"><button class="btn btn-dark" type="submit">Ajouter</button>
            </form>
            <?php }?>
        </div>
    </section>
    <?php $this->load->view('footer'); ?>
    <script src="<?php echo base_url("assets/assets/js/jquery.min.js");?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js");?>"></script>
    <script src="<?php echo base_url("assets/js/bold-and-bright.js");?>"></script>
</body>

</html>