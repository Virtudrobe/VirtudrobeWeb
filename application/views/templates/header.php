<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Virtudrobe</title>
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/styles.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img class="img-fluid" src="<?= base_url('assets/'); ?>img/logo.png"
					alt="Logo Virtudrobe"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">

          <!-- Home -->
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>

          <!-- Product -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Product
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Category 1</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Category 2</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Category 3</a>
						</div>
					</li>
          
          <!-- Wardrobe -->
					<li class="nav-item">
						<a class="nav-link" href="#">
							Wardrobe
						</a>
					</li>

					<!-- Cart Dropdown-->
					<li class="nav-item dropdown">
						<a class="nav-link icon-nav cart-dropdown dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-shopping-cart fa-2x py-1 px-1"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							cart content
						</div>
					</li>

					<!-- User Dropdown-->
					<li class="nav-item dropdown">
						<a class="nav-link icon-nav dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-user-circle fa-3x "></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Login</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Sign Up</a>
						</div>
					</li>

				</ul>
			</div>
		</div>
	</nav>
