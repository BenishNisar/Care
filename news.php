<?php

session_start();
?>

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
$Db=mysqli_connect("localhost","root","","care");
$Query = "SELECT    *   FROM    `diseases`";


$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>
                    <!-- Single Blog -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card mb-4">
                            <img src="./admin/images/<?php echo $Data[5]; ?>" alt="">
                            <h4><?php echo $Data[1]; ?></h4>
                            <p><?php echo $Data[2]; ?></p>
                            $selectquery    

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $Data['id']; ?>">
  Learn More
</button>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal<?php echo $Data['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?php echo $Data['id']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel<?php echo $Data['id']; ?>"><?php echo $Data[1]; ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h1><?php echo $Data[1]; ?></h1>
                <p>Inventor: <?php echo $Data[3]; ?></p>
                            <p><strong>Date: <?php echo $Data[4]; ?></strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
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
