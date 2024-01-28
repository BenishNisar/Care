<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    
    <!-- Title -->
    <title>Care</title>
    
    <?php include_once("headerstyle.php"); ?>
    
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
            <div class="indicator"> 
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>
    <!-- End Preloader -->
    
    <?php include_once("headerfront.php"); ?>
    
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Diseases And Medical Inventions</h2>
                        <ul class="bread-list">
                            <li><a href="index.php">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">News Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

<!-- Start Blog Area -->
<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <?php
            $Db = mysqli_connect("localhost", "root", "", "care");
            $Query = "SELECT * FROM `diseases`";
            $Response = mysqli_query($Db, $Query);
            if (mysqli_num_rows($Response)) {
                while ($Data = mysqli_fetch_array($Response)) {
                    ?>
                    <!-- Single Blog -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card mb-4">
                            <img src="./admin/images/<?php echo $Data[5]; ?>" alt="">
                            <h4><?php echo $Data[1]; ?></h4>
                            <p><?php echo $Data[2]; ?></p>
                            <p>Prevention: <?php echo $Data[3]; ?></p>
                            <p><strong>Cure: <?php echo $Data[4]; ?></strong></p>
                         








<!-- modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">

      <?php
include("connection.php");
$Query="SELECT * FROM `medical_inventions`";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>

        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <?php
    }}

    ?>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  
    
  </div>
</div>

<!-- modal -->







                            <!-- Button trigger modal -->
                        </div>
                        <!-- card -->
                    </div>
                    <!-- End Single Blog -->

                 

                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<!-- End Blog Area -->



    
    

    <?php include_once("footerfront.php"); ?>
    <?php include_once("script.php"); ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
