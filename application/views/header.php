<!DOCTYPE html>
<html lang="es" dir="ltr">

	<head>
		<meta charset="utf-8">
		<title> Economía </title>

    <!-- Importacion de Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSObiapEN36RHn4M-8AcYXAU__6hzQpN4&callback=initMap" defer></script>
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
            });
        }
    </script>


		<!-- Importaciones de la plantilla -->
		<!-- Favicon -->
		<link href="<?php echo base_url();?>assets/image/logoeco.jpg" rel="icon" class="rounded-image">

		<!-- Google Web Fonts -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

		<!-- Font Awesome -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

		<!-- Libraries Stylesheet -->
		<link href="<?php echo base_url();?>/plantilla/lib/animate/animate.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>/plantilla/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>/plantilla/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
		<!-- Customized Bootstrap Stylesheet -->
		<link href="<?php echo base_url();?>/plantilla/css/style.css" rel="stylesheet">

	</head>


	<body>
		<!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="<?php echo site_url();?>" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-primary"><span class="text-dark">ECONOMIA🪙</span></h1><h1 style="color: red"> 2024</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="<?php echo site_url();?>" class="nav-item nav-link active">Inicio
                    <a href="<?php echo site_url(); ?>/welcome/informacion" class="nav-item nav-link">Información</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Latacunga</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="<?php echo site_url(); ?>/welcome/barrio1" class="dropdown-item">Sector Juan Montalvo</a>
                            <a href="<?php echo site_url(); ?>/welcome/barrio2" class="dropdown-item">Sector Ignacio Flores</a>
                            <a href="team.html" class="dropdown-item">Barrio 3</a>
                            <a href="testimonial.html" class="dropdown-item">Barrio 4</a>
                        </div>
                    </div>
                    <a href="<?php echo site_url(); ?>/welcome/contacto" class="nav-item nav-link">Contacto</a>
										<a href="<?php echo site_url(); ?>/welcome/galeria" class="nav-item nav-link">Galeria</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
