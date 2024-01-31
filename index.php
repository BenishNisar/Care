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
		
		<!-- Title -->
        <title>Care</title>
	<?php
	

include_once("headerstyle.php");
	?>
		
    </head>
    <body>
		
	
		
<?php
include_once("preloader.php");
	include_once("headerfront.php");
	

?>






	
		
        <!-- End Preloader -->
		
	<section class="slider">
    <div class="hero-slider">
        <!-- Start Single Slider -->
        <?php
        $Db = mysqli_connect("localhost", "root", "", "care");
        $Query = "SELECT * FROM `slider`";
        $Response = mysqli_query($Db, $Query);
        if (mysqli_num_rows($Response)) {
            while ($Data = mysqli_fetch_array($Response)) {
        ?>
                <div class="single-slider" style="background-image: url(./admin/images/<?php echo $Data[5]; ?>); width: 100%; height: 100vh;">
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="text text-dark">
                                    <h1><?php echo $Data[2]; ?></h1>
                                    <p><?php echo $Data[3]; ?></p>
                                    <div class="button">
                                        <a href="bookappointment.php" class="btn">Get Appointment</a>
                                        <a href="#" class="btn primary">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
</section>



		<!--/ End Slider Area -->
		
		<!-- Start Schedule Area -->
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-ambulance"></i>
									</div>
									<?php
$Db = mysqli_connect("localhost", "root", "", "care");
$Query="SELECT * FROM `websiteinformation`";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>

									<div class="single-content">
										
										<h4>Emergency Cases</h4>


										<p>
										 Contact our hospital's emergency care at [<?php echo $Data[1];  ?>] Your health and safety are our priority.	
										</p>
										<a href="contact.php">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
									<?php
	}}
									?>
								</div>
							</div>
						</div>



						<div class="col-lg-4 col-md-6 col-12">
							<!-- single-schedule -->
							<div class="single-schedule middle">
								<div class="inner">
									<div class="icon">
										<i class="icofont-prescription"></i>
									</div>
									<div class="single-content">





										<h4>Doctors Timetable</h4>
									
										<p id="dynamic-paragraph">Health is not just about the absence of disease, it's about the presence of harmony in body, mind, and soul.</p>

										



										
										<a href="doctortimetable.php">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<?php
		
		$Db = mysqli_connect("localhost", "root", "", "care");
$Query = "SELECT * FROM `openinghours`";


$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>
									<div class="single-content">

	
										<span></span>
										<h4>Opening Hours</h4>
										<ul class="time-sidual">
											<li class="day">Day:<?php echo $Data[1]; ?></li>
											<li class="day">Week:<?php echo $Data[2]; ?> </li>
											<li class="day">Month:<?php echo $Data[3]; ?> </li>
										</ul>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
				
									</div>

									<?php
	}}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/End Start schedule Area -->

		<!-- Start Feautes -->
		<section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Are Always Ready to Help You & Your Family</h2>
							<img src="img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-ambulance-cross"></i>
							</div>
							<h3>Emergency Help</h3>
							<p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-medical-sign-alt"></i>
							</div>
							<h3>Enriched Pharmecy</h3>
							<p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features last">
							<div class="signle-icon">
								<i class="icofont icofont-stethoscope"></i>
							</div>
							<h3>Medical Treatment</h3>
							<p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
						</div>
						<!-- End Single features -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Feautes -->
		
		<!-- Start Fun-facts -->
		<div id="fun-facts" class="fun-facts section overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
					<?php
 $Db = mysqli_connect("localhost", "root", "", "care");
 $query="SELECT * FROM `hospitaldata`";
 $result=mysqli_query($Db,$query);
 $rowcount=mysqli_num_rows($result);

 ?>
	
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-home"></i>
							<div class="content">
								<span class="counter">
									<?php
									echo $rowcount;
									
									?>
								</span>
								<p>Hospital Rooms</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
					
 
					<?php
 $Db = mysqli_connect("localhost", "root", "", "care");
 $query="SELECT * FROM `doctoraccount`";
 $result=mysqli_query($Db,$query);
 $rowcount=mysqli_num_rows($result);

 ?>
	


						<div class="single-fun">
							<i class="icofont icofont-user-alt-3"></i>
							<div class="content">
								<span class="counter">
									<?php echo $rowcount; ?>
							</span>
								<p>Specialist Doctors</p>
							</div>
						</div>
						<!-- End Single Fun -->

					</div>
					<div class="col-lg-3 col-md-6 col-12">

					<?php
 $Db = mysqli_connect("localhost", "root", "", "care");
 $query="SELECT * FROM `patientrecord`";
 $result=mysqli_query($Db,$query);
 $rowcount=mysqli_num_rows($result);

 ?>

						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont-simple-smile"></i>
							<div class="content">
								<span class="counter">
									<?php echo $rowcount;?>
								</span>
								<p>Happy Patients</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">


					<?php
 $Db = mysqli_connect("localhost", "root", "", "care");
 $query="SELECT * FROM `hospitaldata`";
 $result=mysqli_query($Db,$query);
 $rowcount=mysqli_num_rows($result);

 ?>
		
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-table"></i>
							<div class="content">
								<span class="counter">
									<?php
									echo $rowcount;
									?>
								</span>
								<p>Years of Experience</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Fun-facts -->
		
		<!-- Start Why choose -->
		<section class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Offer Different Services To Improve Your Health</h2>
							<img src="img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
					<?php
 $Db = mysqli_connect("localhost", "root", "", "care");
$Query="SELECT * FROM `service` WHERE `id` = 1";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>

						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3><?php echo $Data[1];?></h3>
							<p><?php echo $Data[2]; ?> </p>
						
							<div class="row">
								<div class="col-lg-4">

					<?php
 $Db = mysqli_connect("localhost", "root", "", "care");
$Query="SELECT * FROM `doctoraccount`";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>
									<ul class="list">
										<li><i class="fa fa-caret-right"></i><?php echo $Data[5] ?> </li>
										
									</ul>

<?php
	}}
?>


								</div>
								
							</div>
						</div>
						<!-- End Choose Left -->
						<?php
	}}
						?>
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right">
							<div class="video-image">


								<!-- Video Animation -->
								<div class="promo-video">

									<div class="waves-block">
										<div class="waves wave-1"></div>
										<div class="waves wave-2"></div>
										<div class="waves wave-3"></div>
									</div>
								</div>
								<!--/ End Video Animation -->
								<a href="https://youtu.be/Uf234e_9bmU" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div>

						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Why choose -->
		
		<!-- Start Call to action -->
		<section class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
                    <?php
 $Db = mysqli_connect("localhost", "root", "", "care");
$Query="SELECT * FROM `websiteinformation`";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>


						<div class="content">
							<h2>Do you need Emergency Medical Care? Call <?php  echo $Data[1]; ?></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor dictum turpis nec gravida.</p>
							<div class="button">
								<a href="contact.php" class="btn">Contact Now</a>
								<a href="contact.php" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
					<?php
	}}
					?>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->
		
		<!-- Start portfolio -->
		<section class="portfolio section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Meet Our Doctors</h2>
							<img src="img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="owl-carousel portfolio-slider">
							<?php
							$Db=mysqli_connect("localhost","root","","care");
						
								$Query="SELECT * FROM `doctoraccount`";
								$Response=mysqli_query($Db,$Query);
								if(mysqli_num_rows($Response)){
									while($Data=mysqli_fetch_array($Response)){
								 ?>	
						
							<div class="single-pf">
								<img src="./admin/images/<?php	echo $Data[2];?>" alt="#">
								<a href="portfolio-details.php?id=<?php	echo $Data[0];?>" class="btn">View Details</a>
							</div>
						<?php
									}}
						?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End portfolio -->
		
		<!-- Start service -->
		<section class="services section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Offer Different Services To Improve Your Health</h2>
							<img src="img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">

					<?php
$Db=mysqli_connect("localhost","root","","care");
$Query="SELECT * FROM `service` WHERE `id`=4";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>





						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-prescription"></i>
							<h4><a href="service-details.html"><?php  echo $Data[1]; ?></a></h4>
							<p><?php  echo $Data[2]; ?></p>	
							
						</div>
						<!-- End Single Service -->
						<?php
	}}
						?>
					</div>
					<div class="col-lg-4 col-md-6 col-12">

					
					<?php
$Db=mysqli_connect("localhost","root","","care");
$Query="SELECT * FROM `service` WHERE `id`=5";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-tooth"></i>
							<h4><a href="service-details.php"><?php echo $Data[1]; ?></a></h4>
							<p><?php echo $Data[2] ?></p>	
						</div>
						<!-- End Single Service -->

						<?php
	}}
						?>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
					<?php
$Db=mysqli_connect("localhost","root","","care");
$Query="SELECT * FROM `service` WHERE `id`=6";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>


						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-heart-alt"></i>
							<h4><a href="service-details.php"><?php echo $Data[1]; ?></a></h4>
							<p><?php echo $Data[2]; ?> </p>	
						</div>
						<!-- End Single Service -->

						<?php
	}}
						?>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
					<?php
$Db=mysqli_connect("localhost","root","","care");
$Query="SELECT * FROM `service` WHERE `id`=7";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>



						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-listening"></i>
							<h4><a href="service-details.php"><?php echo $Data[1]; ?></a></h4>
							<p><?php echo $Data[2]; ?> </p>	
						</div>
						<!-- End Single Service -->

						<?php
	}}
						?>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
					<?php
$Db=mysqli_connect("localhost","root","","care");
$Query="SELECT * FROM `service` WHERE `id`=8";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>


					
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-eye-alt"></i>
							<h4><a href="service-details.php"><?php echo $Data[1];  ?></a></h4>
							<p><?php echo $Data[2]; ?> </p>	
						</div>
						<!-- End Single Service -->

						<?php
	}}
						?>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
					<?php
$Db=mysqli_connect("localhost","root","","care");
$Query="SELECT * FROM `service` WHERE `id`=9";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>

						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont icofont-blood"></i>
							<h4><a href="service-details.php"><?php echo $Data[1]; ?></a></h4>
							<p><?php echo $Data[2]; ?></p>	
						</div>
						<!-- End Single Service -->

						<?php
	}}
						?>
					</div>
				</div>
			</div>
		</section>
		<!--/ End service -->
		
	
		
		
		<!-- Start Blog Area -->
		<section class="blog section" id="blog">
			<div class="container">
			<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Keep up with Our Most Recent Medical News.</h2>
							<img src="img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
			<div class="row">
    <?php
    $Db=mysqli_connect("localhost","root","","care");
    $Query="SELECT * FROM `medicalnews`";
    $Response=mysqli_query($Db,$Query);
    if(mysqli_num_rows($Response)){
        while($Data=mysqli_fetch_array($Response)){
    ?>
    <!-- Single Blog -->
    <div class="col-lg-4 col-md-6 col-12">
		
        <div class="card mb-4">
            <img src="./admin/images/<?php echo $Data[5]; ?>" class="card-img-top" alt="#">
            <div class="card-body">
                <div class="date"><?php echo $Data[3]; ?></div>
                <h5 class="card-title"><?php echo $Data[1]; ?></h5>
                <p class="card-text"><?php echo $Data[2]; ?></p>
            </div>
        </div>
		
    </div>
    <!-- End Single Blog -->
    <?php
        }
    }
    ?>
</div>


					
				
		</section>
		<!-- End Blog Area -->
		
		<!-- Start clients -->
		<div class="clients overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="owl-carousel clients-slider">
                    <?php
                    $Db = mysqli_connect("localhost", "root", "", "care");
                    $Query = "SELECT * FROM `client`";
                    $Response = mysqli_query($Db, $Query);
                    if (mysqli_num_rows($Response)) {
                        while ($Data = mysqli_fetch_array($Response)) {
                    ?>
                            <div class="single-clients">
                                <img src="./admin/images/<?php echo $Data[1]; ?>" alt="#">
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

		
		
		<!-- Start Newsletter Area -->
		<section class="newsletter section">
			<div class="container">
				<div class="row ">
					<div class="col-lg-6  col-12">
						<!-- Start Newsletter Form -->
						<div class="subscribe-text ">
							<h6>Sign up for newsletter</h6>
							<p class="">Cu qui soleat partiendo urbanitas. Eum aperiri indoctum eu,<br> homero alterum.</p>
						</div>
						<!-- End Newsletter Form -->
					</div>
					<div class="col-lg-6  col-12">
						<!-- Start Newsletter Form -->
						<div class="subscribe-form ">
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" class="common-input" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Your email address'" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Form -->
					</div>
				</div>
			</div>
		</section>
		<!-- /End Newsletter Area -->
		
	



<?php
include_once("footerfront.php");

?>




		
		<!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="js/easing.js"></script>
		<!-- Color JS -->
		<script src="js/colors.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="js/steller.js"></script>
		<!-- Wow JS -->
		<script src="js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
    </body>
	

</html>
