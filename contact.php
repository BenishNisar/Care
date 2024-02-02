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
		include_once("headerfront.php");
		?>
	
	
		
		
			
		
	
		<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Contact Us</h2>
							<ul class="bread-list">
								<li><a href="index.php">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Contact Us</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				
		<!-- Start Contact Us -->
		<section class="contact-us section">
			<div class="container">
				<div class="inner">
					<div class="row"> 
						<div class="col-lg-6">
							<div class="contact-us-left">
							
								<div id="myMap">

								<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d57925.64359613108!2d66.99468720030097!3d24.851799901079584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d24.8431249!2d67.0621091!4m5!1s0x3eb33e1aa2f228a5%3A0x156e18a225edddbc!2sDr.%20Ruth%20K.%20M.%20Pfau%2C%20Civil%20Hospital%20Karachi%2C%20Mission%20Rd%2C%20near%20Civil%20Hospital%20Masjid%D8%8C%20Nanakwara%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh!3m2!1d24.8589392!2d67.0101439!5e0!3m2!1sen!2s!4v1706797660549!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
								<!--/End Google-map -->
							</div>
						</div>
						<div class="col-lg-6">
							<div class="contact-us-form">
								<h2>Contact With Us</h2>
								<p>If you have any questions please fell free to contact with us.</p>
								<!-- Form -->
								<form class="form"  action="#" method="POST">
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="name" placeholder="Name" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="email" name="email" placeholder="Email" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="phone" placeholder="Phone" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="subject" placeholder="Subject" required="">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<textarea name="message" placeholder="Your Message" required=""></textarea>
											</div>
										</div>
										<div class="col-6">
											<div class="form-group login-btn">
												<button class="btn" name="submit" type="submit">Send</button>
											</div>
											<div class="checkbox">
												<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Do you want to subscribe our Newsletter ?</label>
											</div>
										</div>
									</div>
								</form>
								<!--/ End Form -->
							</div>
						</div>
					</div>
				</div>
				<div class="contact-info">
					<div class="row">
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
						<?php
	$Db=mysqli_connect("localhost","root","","care");
$Query="SELECT * FROM `websiteinformation`";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>
							<div class="single-info">

								<i class="icofont icofont-ui-call"></i>
								<div class="content">
									<h3><?php echo $Data[1];?></h3>
									<p><?php echo $Data[2]; ?></p>
								</div>
							</div>
							<?php
	}}
							?>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont-google-map"></i>
								<div class="content">
									<h3>2 Fir e Brigade Road</h3>
									<p>Chittagonj, Lakshmipur</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">

							<div class="single-info">


							
								<i class="icofont icofont-wall-clock"></i>
								<div class="content">
									<h3>Mon - Sat: 8am - 5pm</h3>
									<p>Sunday Closed</p>
								</div>
							</div>

			
						</div>
						<!--/End single-info -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Contact Us -->

	
	<?php
	include_once("footerfront.php");
	include_once("script.php");
	?>
		
		
    </body>
</html>

<?php
if(isset($_POST["submit"])){
	$Db=mysqli_connect("localhost","root","","care");
    $Name=$_POST["name"];
    $Email=$_POST["email"];
    $Phone=$_POST["phone"];
    $Subject=$_POST["subject"];
    $Message=$_POST["message"];
    
   
  

  
  
$Query="INSERT INTO `contact`(`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES (
    NULL,'$Name','$Email','$Phone','$Subject','$Message')";


mysqli_query($Db,$Query);




}


?>
	