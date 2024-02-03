<?php
session_start();
?>

<!DOCTYPE html>
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
            $Db = mysqli_connect("localhost", "root", "", "care");
            

            $query = "SELECT d.*, m.* FROM diseases AS d INNER JOIN medical_inventions AS m ON d.id = m.diseaseid";
            $response = mysqli_query($Db, $query);
            
            if ($response && mysqli_num_rows($response) > 0) {
                while ($data = mysqli_fetch_assoc($response)) {
            ?>
            
            <div class="col-lg-4 col-md-6 col-12" >
                <div class="card mb-4"  >
                    <img src="./admin/images/<?php echo $data['image']; ?>" width="100%" >
                    <div style="margin-left: 10px;">
                        <h6>Disease Name: <?php echo $data['diseasename']; ?></h6>
                      
                        <h6>Cure: <?php echo $data['cure']; ?></h6>
                        <p>Prevention:<?php echo $data['preventation']; ?></p>
                    </div>
                    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $data['id']; ?>">
                        View Detail
                    </button>
                </div>
            </div>
            <!-- End Single Blog -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal<?php echo $data['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?php echo $data['id']; ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel<?php echo $data['id']; ?>"><?php echo $data['inventionsname']; ?></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="./admin/images/<?php echo $data['image']; ?>" width="100%">
                            <p>Inventor: <?php echo $data['inventor']; ?></p>
                            <p><strong>Date: <?php echo $data['inventationsdate']; ?></strong></p>
                            <p><strong>Descripation: <?php echo $data['preventation']; ?></strong></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
