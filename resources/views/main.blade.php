<?php if (!isset($_SESSION)) { session_start(); }; $nav_home = "active" ?>
@extends("index")

@section('Content')
<main id="main">
		<!-- Intro -->
		@include("template.pageDeGarde")

		<!-- Intro -->
		@include("template.intro")

		<!-- Offre de Prestation -->
		<?php //include("assets/template/offrePresta.php");
		?>

		<!-- Pourquoi nous choisir ? -->
		@include("template.nousChoisir")

		<!-- Portofolio -->
		<?php //include("assets/template/portofolio.php");
		?>

		<!-- Avis Clients -->
		<?php //include("assets/template/avis.php");
		?>

		<!-- Clients -->
		@include("template.clients")

</main><!-- End #main -->

@endsection