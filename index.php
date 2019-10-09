<?php 
   include 'koneksi.php';
 ?>
 <html>
	<head>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  		<link href="css/materialize.min.css"  media="screen,projection" type="text/css" rel="stylesheet" />
  		<link href="css/aos.css" type="text/css" rel="stylesheet" />
  		<link href="css/main.css"  type="text/css" rel="stylesheet" />
  		<link href="img/favicon-32x32.png" sizes="32x32" rel="icon">
  		<title>Web RT/RW Net</title>
	</head>	
  	<body>
  		<a id="home"></a>
  		<div class="navbar-fixed">
			<nav>
		    	<div class="nav-wrapper  black">
		    		<div class="container">
			      		<ul id="nav-mobile" class="hide-on-med-and-down">
					        <li><a href="#home">Home</a></li>
					        <li><a href="#about">About</a></li>
					        <li><a href="#contact">Contact</a></li>
		      			</ul>
		      			<ul id="nav-mobile" class="right hide-on-med-and-down">
					        <li>
					        	<form>
							        <div class="input-field">
							          <input id="search" type="search" placeholder="Search..." required>
							          <label class="label-icon" for="search"><i class="material-icons" style="margin-top: -15px;">search</i></label>
							          <i class="material-icons">close</i>
							        </div>
      							</form>
      						</li>
		      			</ul>
		      		</div>
		    	</div>
		  	</nav>
		</div>		
		<div class="bg"></div>
		<div class="title">
			<span class="subtitle  black-text"><h2 data-aos="fade-down">Web RT/RW Net</h2></span><br>
			<a href="#about" class="waves-effect waves-light btn-large blue" data-aos="fade-right">About</a>
			<a class="waves-effect waves-light btn-large green accent-4" data-aos="fade-left" href="login.php">Login</a>
		</div>

		<div class="container">
			<div class="row">
				<a id="about" class="line"><h4 class="margin h1" data-aos="zoom-out" data-aos-duration="500">About</h4></a>
				<p class="justify" data-aos="zoom-in-down" data-aos-duration="500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit explicabo assumenda eligendi ex exercitationem harum deleniti quaerat beatae ducimus dolor voluptates magnam, reiciendis pariatur culpa tempore quibusdam quidem, saepe eius.

				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit explicabo assumenda eligendi ex exercitationem harum deleniti quaerat beatae ducimus dolor voluptates magnam, reiciendis pariatur culpa tempore quibusdam quidem, saepe eius.</p>
				<p class="justify" data-aos="zoom-in-down" data-aos-duration="500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit explicabo assumenda eligendi ex exercitationem harum deleniti quaerat beatae ducimus dolor voluptates magnam, reiciendis pariatur culpa tempore quibusdam quidem, saepe eius.

				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit explicabo assumenda eligendi ex exercitationem harum deleniti quaerat beatae ducimus dolor voluptates magnam, reiciendis pariatur culpa tempore quibusdam quidem, saepe eius.</p>
			</div>

			<div class="row">			
				<a id="freatures" class="line"><h4 class="margin h1" data-aos="zoom-out" data-aos-duration="500">Freatures</h4></a>
				<div class="col s12 m4">
		        	<div class="icon-block">
		            	<h2 class="center light-blue-text"><i class="material-icons" data-aos="zoom-in-down" data-aos-duration="500">group</i></h2>
		            	<h5 class="center" data-aos="zoom-in-down" data-aos-duration="500">Tim Profesional</h5>

		            	<p class="light justify" data-aos="zoom-in-down" data-aos-duration="500">Created and designed by Google, Material Design is a design language that combines the classic principles of successful projects along with innovation and technology.</p>
		          	</div>
		        </div>

		        <div class="col s12 m4">
		        	<div class="icon-block">
			            <h2 class="center light-blue-text"><i class="material-icons" data-aos="zoom-in-down" data-aos-duration="500">extension</i></h2>
			            <h5 class="center" data-aos="zoom-in-down" data-aos-duration="500">Tetep bahagia</h5>

			            <p class="light justify" data-aos="zoom-in-down" data-aos-duration="500">Small library to animate elements on your page as you scroll. CSS3 driven scroll animation library. AOS allows you to animate elements as you scroll down, and up.</p>
		          	</div>
		        </div>

		        <div class="col s12 m4">
		        	<div class="icon-block">
			            <h2 class="center light-blue-text"><i class="material-icons" data-aos="zoom-in-down" data-aos-duration="500">build</i></h2>
			            <h5 class="center" data-aos="zoom-in-down" data-aos-duration="500">Berkarakter BARBAR</h5>

			            <p class="light justify" data-aos="zoom-in-down" data-aos-duration="500">All project files are included in the repository. Just download and open the html file in your favorite browser. Tested on Chrome, Firefox, IE and Safary.</p>
			        </div>
		        </div>
			</div>

			<div class="row">
				<a id="contact" class="line"><h4 class="margin h1" data-aos="zoom-out" data-aos-duration="500">Contact</h4></a>
				<div class="col s12 m4">
		        	<div class="icon-block">
		            	<h2 class="center light-blue-text"><i class="material-icons" data-aos="zoom-in-down" data-aos-duration="500">location_on</i></h2>
		            	<p class="center" data-aos="zoom-in-down" data-aos-duration="500">Jl.Amd Babakan pocis bakti jaya setu pocis 4</p>
		            	<p class="center" data-aos="zoom-in-down" data-aos-duration="500">(Pusat) Komplek Garuda Parung</p>

		            	<h2 class="center light-blue-text"><i class="material-icons" data-aos="zoom-in-down" data-aos-duration="500">phone</i></h2>
		            	<p class="center" data-aos="zoom-in-down" data-aos-duration="500">(+62)895611533680</p>

		            	<h2 class="center light-blue-text"><i class="material-icons" data-aos="zoom-in-down" data-aos-duration="500">mail</i></h2>
		            	<p class="center" data-aos="zoom-in-down" data-aos-duration="500">ikbalputra124@gmail.com</p>
		          	</div>
		        </div>

		        <div class="col s12 m8">
		        	<div class="icon-block">
			            <iframe class="marginxs" data-aos="zoom-in-down" data-aos-duration="500" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4715.579055124581!2d106.69819314614375!3d-6.353443265620437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e59f6ae9db9d%3A0xc36c17a144b18d3c!2sJl.%20Amd.%20Babakan%20Pocis%20No.4%2C%20Babakan%2C%20Kec.%20Setu%2C%20Kota%20Tangerang%20Selatan%2C%20Banten%2015310!5e0!3m2!1sid!2sid!4v1570585771848!5m2!1sid!2sid" width="100%" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>
		          	</div>
		        </div>
			</div>
		</div>

		<div class="container-fluid  footer">
			<div class="row">
				<div class="col s12 m3 marginxs">
		        	<h5 class="center white-text" data-aos="zoom-in-down">Tujuan Project Rt/Rw Net</h5>
		            <p class="justify white-text" data-aos="zoom-in-down">Tujuan dibuat nya projek ini adalah untuk membangun koneksi internet jaringan LAN</p>
		        </div>

		        <div class="col s12 m3 marginxs">
		        	<h5 class="center white-text" data-aos="zoom-in-down">APA YANG DIKERJAKAN</h5>
		            <ul class="center white-text" data-aos="zoom-in-down">
		            	<li><a href="https://github.com/ikbalputra124/jquery-showcase" class="center white-text" target="_blank">Membangun fasilitas internet di area RT/RW</a></li>
		            </ul>
		        </div>

		        <div class="col s12 m3 marginxs">
		        	<h5 class="center white-text" data-aos="zoom-in-down">APA YANG AKAN DILAKUKAN KEDEPAN</h5>
		            <ul class="center white-text" data-aos="zoom-in-down">
		            	<li><a href="https://michalsnik.github.io/aos/" class="center white-text" target="_blank">Kami ingin membangun Tim yang profesional dan berkarakter santuy </a></li>
		            	<li><a href="http://materializecss.com/" class="center white-text" target="_blank">AWKWKWKWK</a></li>
		            </ul>
		        </div>

		        <div class="col s12 m3 marginxs">
		        	<h5 class="center white-text" data-aos="zoom-in-down">FIND US</h5>
		            <ul class="center white-text" data-aos="zoom-in-down">
		            	<li><a href="https://www.facebook.com/ikbalputra" class="center blue-text" target="_blank">Facebook</a></li>
		            	<li><a href="https://twitter.com/imam" class="center blue-text" target="_blank">Twitter</a></li>
		            	<li><a href="https://www.instagram.com/ikbalputrafauzan" class="center blue-text" target="_blank">Instagram</a></li>
		            </ul>
		        </div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col s12">
				</div>
			</div>
		</div>
		<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
		<script src="js/materialize.min.js" type="text/javascript"></script>
		<script src="js/aos.js" type="text/javascript"></script>
		<script src="js/main.js" type="text/javascript"></script>
	</body>
 </html>