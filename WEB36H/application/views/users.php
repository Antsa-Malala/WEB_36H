<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Utilisateurs</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/bootstrap/css/bootstrap.min.css?h=63c49130f916e8761302328c73ff1917");?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/css/Features-Large-Icons-icons.css?h=befd8a398792e305b7ffd4a176b5b585");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/css/Projects-Grid-Horizontal-images.css?h=4f3cfa46e40e236365345fc77963f4b8");?>">
</head>

<body>
<?php $this->load->view('header'); ?>
    <section class="py-5">
        <div class="container py-4 py-xl-5">
            <div class="row">
                <div class="col-md-8 col-xl-6 mx-auto p-4">
                    <?php for($i=0;$i<count($user);$i++)
                    { ?>

                        <div class="d-flex align-items-center align-items-md-start align-items-xl-center">
                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center me-4 d-inline-block bs-icon xl"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor">
                            <path d="M256 288c79.53 0 144-64.47 144-144s-64.47-144-144-144c-79.52 0-144 64.47-144 144S176.5 288 256 288zM351.1 320H160c-88.36 0-160 71.63-160 160c0 17.67 14.33 32 31.1 32H480c17.67 0 31.1-14.33 31.1-32C512 391.6 440.4 320 351.1 320z"></path>
                            </svg></div>
                            <div>
                            <h4><?php echo $user[$i]['nom'];?> <?php echo $user[$i]['prenom'];?></h4>
                            </div>
                        </div>
                        <a href="<?php echo base_url("Objet/liste_objet_utilisateur"); echo "/".$user[$i]['id'];?>">Ses Objets&nbsp;</a>
                        <hr class="my-5">
                    <?php }?>
                    
                </div>
            </div>
        </div>
    </section>
    <?php $this->load->view('footer'); ?>
    <script src="<?php echo base_url("assets/assets/js/jquery.min.js?h=84e399b8f2181ccd73394fdeddff1638");?>"></script>
    <script src="<?php echo base_url("assets/assets/bootstrap/js/bootstrap.min.js?h=01bb7ae0c0b11509558f2aa83f244399");?>"></script>
    <script src="<?php echo base_url("assets/assets/js/bold-and-bright.js?h=914b066f52f5e2b2583e4d1558c90518");?>"></script>
</body>

</html>