<?php 
session_start(); 
include("resources/connection.php");
include("php/page-info.php");
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
			  <title><?= $_SESSION['current_page']; ?></title>
			  <?php $_SERVER['REQUEST_URI']; ?>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <meta name='description' content="<?= $_SESSION['Description']; ?>">            
              <!-- <meta name="author" content="<?= $_SESSION['ArticleAuthor']; ?>"> -->
              <!-- <link rel="icon" href="/images/halfLogo.png"> -->
              <link href="/style/bootstrap.css" rel="stylesheet">
              <link href="/style/font-awesome.min.css" rel="stylesheet">
              <link href="/style/main.css" rel="stylesheet">
              <script src="/script/jquery-3.4.1.js"></script>
              <script src="/script/bootstrap.js"></script>
        </head>


        
	<div class="navigation-wrap bg-light start-header start-style">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">
						<!-- <a class="navbar-brand" href="/"><img src="/logo.svg"></a>	 -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<a href="/" class="nav-number-link"><span style="font-size: 1.6rem;"><img style="width: 2.1rem;" src="/svg/phone-fill.svg"></i>(586)474-5993</span></a>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto py-4 py-md-0">
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/">Home</a>
								</li>
								<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/learn.php">Learn</a>
								</li> -->
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 d-block d-lg-none">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Residental</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="/pages/services/junk-removal-residential.php">Residential</a>
									</div>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 d-block d-lg-none">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Commercial</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="/pages/services/junk-removal-commercial.php">Commercial</a>
									</div>
								</li>
								<li class="nav-item dropdown pl-4 pl-md-0 ml-0 ml-md-4 d-none d-lg-block">
									<a class="nav-link dropdown-toggle">Residential</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="/pages/services/junk-removal-residential.php">Residental Summary</a>
										<a class="dropdown-item" href="/pages/services/junk-removal-trash.php">Trash Removal</a>
										<a class="dropdown-item" href="/pages/services/junk-removal-appliance.php">Appliance Removal</a>
										<a class="dropdown-item" href="/pages/services/junk-removal-cleanout.php">Cleanout Services</a>
										<a class="dropdown-item" href="/pages/services/junk-removal-demolition.php">Demolition</a>
									</div>
								</li>
								<li class="nav-item dropdown pl-4 pl-md-0 ml-0 ml-md-4 d-none d-lg-block">
									<a class="nav-link dropdown-toggle">Commercial</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="/pages/services/junk-removal-commercial.php">Commercial</a>
									</div>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/pages/contact-us.php">Contact Us</a>
								</li>
							</ul>
						</div>
					</nav>		
				</div>
			</div>
		</div>
	</div>
