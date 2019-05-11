<!DOCTYPE html>
<?php session_start(); ?>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Min Side - Jeg Lurer På</title>
	<meta name="description"  content="Spill for vanskelige tema" />
	<meta name="author" content="IG Design">
	<meta name="keywords"  content="Jeg Lurer På, Spill, Kristiansand Sykehus, Vanskelige tema" />
	<meta property="og:title" content="Jeg Lurer På - Logg Inn / Registrer" />
	<meta property="og:type" content="Jeg Lurer På" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:image:width" content="470" />
	<meta property="og:image:height" content="246" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="Jeg Lurer På - gjør det lettere å snakke om vanskelige tema" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="#" />
	<meta name="twitter:domain" content="#" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:description" content="Jeg Lurer På - gjør det lettere å snakke om vanskelige tema" />
	<meta name="twitter:image" content="http://www.jeglurerpå.no" />
	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#212121" />
	<meta name="msapplication-navbutton-color" content="#212121" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#212121" />
	<!-- Web Fonts
	================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet" />

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/owl.transitions.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/colors/color.css" />
	<link rel="stylesheet" href="css/game.css" />

	<!-- Favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

	<!-- JAVASCRIPT
	================================================== -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/webfunction.js"></script>

</head>
<body>
	<div class="loader">
		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
		<rect x="0" y="0" width="4" height="10" fill="#333">
		<animateTransform attributeType="xml"
						  attributeName="transform" type="translate"
						  values="0 0; 0 20; 0 0"
						  begin="0" dur="0.6s" repeatCount="indefinite" />
			</rect>
		<rect x="10" y="0" width="4" height="10" fill="#333">
		<animateTransform attributeType="xml"
						  attributeName="transform" type="translate"
						  values="0 0; 0 20; 0 0"
						  begin="0.2s" dur="0.6s" repeatCount="indefinite" />
			</rect>
		<rect x="20" y="0" width="4" height="10" fill="#333">
		<animateTransform attributeType="xml"
						  attributeName="transform" type="translate"
						  values="0 0; 0 20; 0 0"
						  begin="0.4s" dur="0.6s" repeatCount="indefinite" />
			</rect>
		</svg>
	</div>


	<!-- Nav and Logo
	================================================== -->

	<div id="menu-wrap" class="menu-back cbp-af-header">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-lg navbar-light bg-light mx-lg-0">
						<a class="navbar-brand" href="index.php"><img src="img/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon">
								<span class="menu-icon__line menu-icon__line-left"></span>
								<span class="menu-icon__line"></span>
								<span class="menu-icon__line menu-icon__line-right"></span>
							</span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item"> 
									<a class="nav-link no-line floatNav" href="hvordanspille.php">Hvordan spiller man?</a>
								</li>
								<li class="nav-item">
									<a class="nav-link no-line floatNav" href="omoss.php">Om oss</a>
								</li>
								<li class="nav-item">
									<a class="nav-link no-line floatNav" href="kontaktoss.php">Kontakt oss</a>
								</li>
								<li class="nav-item">
									<a class="nav-link no-line floatNav" href="game.php">Spill nå</a>
								</li>
								<?php 
									if(isset($_SESSION['uid']) || (isset($_COOKIE['uid']))) {
										echo "<li class='nav-item'>
										<a class='nav-link no-line floatNav' href='logout.php'>Logg ut</a>
										</li>";
									} 
										?>
								<li class="nav-item mt-2">
									<?php 
									if(isset($_SESSION['uid']) || (isset($_COOKIE['uid']))) {
											echo '<a class="btn btn-primary js-tilt floatNav" href="minside.php" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"  id="logininfo"><span>Min Side</span></a>';
										} else {
											echo '<a class="btn btn-primary js-tilt floatNav" href="register.php" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"  id="logininfo"><span>Logg inn / Registrer</span></a>';
										}
									?>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<!-- Primary Page Layout
	================================================== -->
	<div class="section full-height height-auto-lg hide-over background-light-blue">
		<div class="hero-center-wrap relative-on-lg">
			<div class="container">
				
			<div class="settings-page">
  <div class="settings-container">
    <h1 class="page-title">Min Side</h1>
    <div class="settings-section">
      <h2 class="settings-title">Generell informasjon</h2>
        <div>
		  <p>Brukernavn: eksempel</p> 
		  
		  <a class="btn btn-primary ml-lg-0 js-tilt" href="" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>Endre</span></a>
        </div>
   <div>
      <div>
        <p>E-post: eksempel@uia.no</p><a class="btn btn-primary ml-lg-0 js-tilt" href="" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>Endre</span></a>
      </div>
    </div>
  </div>
<div>
  <h2 class="settings-title">Kortstokker</h2>
  <form class="form my-form">
    <div class="form-submit">
	<a class="btn btn-primary ml-lg-0 js-tilt" href="" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>Ny kortstokk</span></a>
    </div>
  </form>
</div>
<div class="settings-section">
  <h2 class="settings-title">Passord</h2>
  <form class="form my-form">
    <div class="form-group">
      <div class="input-group">
	  <p class="fieldset">
												<label class="image-replace password" for="signup-password">Gammelt passord</label>
												<input class="full-width has-padding has-border" id="signup-password" type="password"  placeholder="Gammelt Passord" required>
												<a href="#0" class="hide-password">vis</a>
												<span class="error-message" ><p class="text-center text-danger" id="regpwerr"></p></span>
											</p>
        <span class="focus-input"></span>
      </div>
    </div>
    <div class="form-group">
      <div class="input-group">
	  <p class="fieldset">
												<label class="image-replace password" for="signup-password">Nytt passord</label>
												<input class="full-width has-padding has-border" id="signup-password" type="password"  placeholder="Nytt Passord" required>
												<a href="#0" class="hide-password">vis</a>
												<span class="error-message" ><p class="text-center text-danger" id="regpwerr"></p></span>
											</p>
        <span class="focus-input"></span>
      </div>
    </div>
   <div class="form-submit right">
   <a class="btn btn-primary ml-lg-0 js-tilt" href="" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>Lagre</span></a>
    </div>
  </form>
</div>
</div>
</div>
				</div>
			</div>
		</div>
	<div class="section py-4 background-dark-blue">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 footer text-center text-lg-left">
					<p>Copyright © 2019, SSHF by <a href="https://themeforest.net/user/ig_design/portfolio?ref=IG_design">Partner</a></p>
				</div>
				<div class="col-lg-6 footer mt-4 mr-auto mt-lg-0 mr-lg-0 text-center text-lg-right">
					<a class="app-btn mx-2 mr-lg-3" href="#"><i class="fa fa-twitter"></i></a>
					<a class="app-btn mx-2 mr-lg-3" href="#"><i class="fa fa-linkedin"></i></a>
					<a class="app-btn mx-2 mr-lg-3" href="#"><i class="fa fa-facebook"></i></a>
					<a class="app-btn mx-2 mr-lg-3" href="#"><i class="fa fa-git"></i></a>
					<a class="app-btn mx-2 mr-lg-3" href="#"><i class="fa fa-pinterest-p"></i></a>
					<a class="app-btn mx-2 mr-lg-0" href="#"><i class="fa fa-paper-plane"></i></a>
				</div>
			</div>
		</div>
	</div>





	<div class="scroll-to-top">to top</div>

<!-- End Document

	================================================== -->

</body>
</html>
