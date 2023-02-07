<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contacts - Brand</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/bootstrap/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/css/Features-Large-Icons-icons.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/css/Projects-Grid-Horizontal-images.css")?>">
</head>
<body style="/*background: url(&quot;design.jpg&quot;);*/background-position: 0 -60px;">
<?php echo $admin['nom'];?>
<?php $this->load->view('header'); ?>
    <section class="py-5">
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Anaran'olona</h2>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4 class="card-title">Nom Objet</h4><img>
                        </div>
                    </div><button class="btn btn-primary" type="button">Proposition</button><button class="btn btn-primary" type="button">Modifier</button>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4 class="card-title">Nom Objet</h4><img>
                        </div>
                    </div><button class="btn btn-primary" type="button">Proposition</button><button class="btn btn-primary" type="button">Modifier</button>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4 class="card-title">Nom Objet</h4><img>
                        </div>
                    </div><button class="btn btn-primary" type="button">Proposition</button><button class="btn btn-primary" type="button">Modifier</button>
                </div>
            </div>
        </div>
    </section>
    <?php $this->load->view('footer'); ?>
    <script src="<?php echo base_url("assets/assets/js/jquery.min.js")?>"></script>
    <script src="<?php echo base_url("assets/assets/bootstrap/js/bootstrap.min.js");?>"></script>
    <script src="<?php echo base_url("assets/assets/js/bold-and-bright.js");?>"></script>
</body>

</html>