<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Insertion Objet</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/bootstrap/css/bootstrap.min.css");?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/css/Features-Large-Icons-icons.css");?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="<?php echo base_url("assets/assets/css/Projects-Grid-Horizontal-images.css");?>">
</head>

<body>
<?php $this->load->view('header'); ?>
    <section class="py-5">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold">Insertion Objet</h2>
                    <p class="text-muted w-lg-50"></p>
                </div>
            </div>
            <section class="position-relative py-4 py-xl-5">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6 col-lg-5 col-xl-4">
                            <div>
                                <form class="p-3 p-xl-4" method="post" action="<?php echo base_url("Objet/insertion_objet/");?>">
                                    <div class="mb-3"><input class="form-control" type="text" id="name-1" name="nom" placeholder="Nom"></div><input class="form-control" type="text" id="email-1" name="description" placeholder="Description" style="margin: 0px;">            <div class="mb-3"></div><input class="form-control" type="number" placeholder="Prix Estimatif" min="0" max="99999999999" name="prix">
                                    <div class="mb-3"></div><input class="form-control" type="hidden">
                                    <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active"></div>
                                            <div class="carousel-item"><img class="w-100 d-block" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image"></div>
                                            <div class="carousel-item"><img class="w-100 d-block" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image"></div>
                                        </div>
                                        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="visually-hidden">Next</span></a></div>
                                        <ol class="carousel-indicators">
                                            <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                                            <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                                            <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                                        </ol>
                                    </div><input class="form-control" type="file">
                                    <button class="btn btn-primary" data-aos="fade" type="button" style="width: 219.637px;height: 49.8px;margin: 0px;margin-right: 635px;margin-left: 450px;text-align: center;padding-right: 30px;">Inserer</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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