<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mes objets</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/bootstrap/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/css/Features-Large-Icons-icons.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/css/Projects-Grid-Horizontal-images.css")?>">
</head>
<body style="/*background: url(&quot;design.jpg&quot;);*/background-position: 0 -60px;">

<?php $this->load->view('header'); ?>
    <section class="py-5">
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2><?php echo $nom;?></h2>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                <?php for($i=0;$i<count($objet);$i++)
                { ?>

                    <div class="col">
                    <div class="card">
                    <div class="card-body p-4">
                    <h4 class="card-title"><?php echo $objet[$i]['nom']?></h4>
                    <p>Description : <?php echo $objet[$i]['description']?> </p>
                    <p>Prix Estimatif : Ar <?php echo $objet[$i]['prix']?> </p>
                    </div>
                    </div><a href="<?php echo base_url("Proposition_controller/proposition"); echo "/".$objet[$i]['id']?>"><button class="btn btn-primary" type="button">Propositions recues</button></a>
                    </div>
                <?php }?>
               
            </div>
        </div>
    </section>
    <?php $this->load->view('footer'); ?>
    <script src="<?php echo base_url("assets/assets/js/jquery.min.js")?>"></script>
    <script src="<?php echo base_url("assets/assets/bootstrap/js/bootstrap.min.js");?>"></script>
    <script src="<?php echo base_url("assets/assets/js/bold-and-bright.js");?>"></script>
</body>

</html>