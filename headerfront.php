

<!-- Header Area -->
<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							<ul class="top-link">
								<li><a href="about.php">About</a></li>
								<li><a href="doctortimetable.php">Doctors</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
							<!-- End Contact -->
						</div>
						<div class="col-lg-6 col-md-7 col-12">

                   <?php
$Db=mysqli_connect("localhost","root","","care");
$Query="SELECT * FROM `websiteinformation`";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>


						
							<ul class="top-contact">
								<li><i class="fa fa-phone"></i><?php echo $Data[1];?></li>
								<li><i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com"><?php echo $Data[2]; ?></a></li>
							</ul>
							<!-- End Top Contact -->

							<?php
	}
}
							?>
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="index.php"><img src="img/carelogore.png" width="150px" ></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li class="active"><a href="index.php">Home </a>
												
											</li>
											<li><a href="doctortimetable.php">Doctos </a></li>
											<li><a href="services.php">Services </a></li>
											<li><a href="#">Pages <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="404.html">404 Error</a></li>
												</ul>
											</li>
											<li><a href="news.php">News<i class="icofont-rounded-down"></i></a>
												
											</li>
											<li><a href="contact.php">Contact Us</a></li>
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="bookappointment.php" class="btn">Book Appointment</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
	