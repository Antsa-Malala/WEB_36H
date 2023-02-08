<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home </title>
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/bootstrap/css/bootstrap.min.css");?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/fonts/fontawesome-all.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/css/Features-Large-Icons-icons.css");?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/css/Projects-Grid-Horizontal-images.css");?>">
</head>

<body style="/*background: url(&quot;design.jpg&quot;);*/background-position: 0 -60px;">
   <?php $this->load->view('header'); ?>
    <header class="bg-primary-gradient"></header>
    <section></section>
    <section></section>
    <section class="py-5 mt-5">
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Proposition Echange</h2>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2">
                <?php for($i=0;$i<count($utilisateur1);$i++)
                { ?>
                    
                <div class="col">
                    <div class="d-flex flex-column flex-lg-row">
                        <div class="w-100">
                            <p>Votre objet : <?php echo $objet1[$i]['nom'] ?>&nbsp;<br>Prix : <?php echo $objet1[$i]['prix'] ?><br></p>
                            <h4>L'échangeur : <?php echo $utilisateur2[$i]['nom'];?> <?php echo $utilisateur2[$i]['prenom'];?></h4>
                            <p>Objet à échanger: <?php echo $objet2[$i]['nom'] ?>&nbsp;<br>Prix : <?php echo $objet2[$i]['prix'] ?><br></p>
                            <a href="<?php echo base_url("Proposition_controller/validation");?>?id=<?php echo $idproposition[$i]; ?>"><p>Valider</p></a>
                            <a href="<?php echo base_url("Proposition_controller/refus");?>?id=<?php echo $idproposition[$i]; ?>"><p>Refuser</p></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php $this->load->view('footer'); ?>
    <script src="<?php echo base_url("assets/assets/js/jquery.min.js");?>"></script>
    <script src="<?php echo base_url("assets/assets/bootstrap/js/bootstrap.min.js");?>"></script>
    <script src="<?php echo base_url("assets/assets/js/bs-init.js");?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="<?php echo base_url("assets/assets/js/bold-and-bright.js");?>"></script>
</body>

</html>