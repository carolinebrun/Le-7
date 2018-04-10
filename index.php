<?php require_once('cockpit/bootstrap.php'); ?>
<?php require_once('route.php'); ?>

<!DOCTYPE HTML>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<title><?= $title; ?>Restaurant Le 7 Périgueux</title>
	<link rel="icon" type="image/jpg" href="/assets/fav.png"/>
	<!-- LIB -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<!-- BOOTSRAP -->
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
	<!-- CUSTOM -->
	<script type="text/javascript" src="/assets/scroll.js"></script>
	<link rel="stylesheet" href="/assets/style.css">
</head>
<body class="<?= $page; ?>">
	
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-1 visible-md-block visible-lg-block">
				<a href="/"><img src="<?= str_replace("site:", "/", cockpit('regions:region_field', 'Setup', 'logo', 'value')); ?>" id="logo"></a>
			</div>
			<div class="col-md-10">
				<nav class="navbar navbar-default">
					<div class="navbar-header">						
						<div class="col-xs-4 visible-xs-block">
							<a href="/"><img src="<?= str_replace("site:", "/", cockpit('regions:region_field', 'Setup', 'logo', 'value')); ?>" id="logo_mob"></a>
						</div>
						<div class="col-xs-8">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
					</div>
					
					<ul class="nav collapse navbar-collapse" id="main_nav">
						<li><a href="/" <?php if($get_1==''){ echo 'class="actif"'; } ?>>Accueil</a></li>
						<li><a href="/lieu" <?php if($get_1=='lieu'){ echo 'class="actif"'; } ?>>Le lieu</a></li>
						<li><a href="/evenements" <?php if($get_1=='evenements'){ echo 'class="actif"'; } ?>>Evénements</a></li>
						<li><a href="/reception-de-groupe" <?php if($get_1=='reception-de-groupe'){ echo 'class="actif"'; } ?>>Réception de groupes</a></li>
						<li><a href="/galerie" <?php if($get_1=='galerie'){ echo 'class="actif"'; } ?>>Galerie</a></li>
						<li><a href="/contact" <?php if($get_1=='contact'){ echo 'class="actif"'; } ?>>Contact</a></li>
					</ul>

				</nav>
			</div>
			<div class="col-md-1 text-right visible-md-block visible-lg-block">
				<a href="<?= cockpit('regions:region_field', 'Setup', 'url_fb', 'value'); ?>" target="_blank"><img src="<?= str_replace("site:", "/", cockpit('regions:region_field', 'Setup', 'btn_fb', 'value')); ?>"></a>
			</div>
		</div>
	</div>
</header>	
	
<?= $content; ?>	

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<p><?= cockpit('regions:region_field', 'Setup', 'texte_footer', 'value'); ?></p>
			</div>
		</div>
	</div>
</footer>

<section id="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<p><?= cockpit('regions:region_field', 'Setup', 'texte_copyright', 'value'); ?></p>
			</div>
		</div>
	</div>
</section>

<!-- DATE -->
<link rel="stylesheet" type="text/css" href="/assets/jquery.datetimepicker.css"/>
<link rel="stylesheet" type="text/css" href="/assets/reservation.css"/>
<script type="text/javascript" src="/assets/jquery.datetimepicker.full.js"></script>	
<!-- ZOOMBOX -->
<link rel="stylesheet" type="text/css" href="/assets/zoombox.css" /> 
<script type="text/javascript" src="/assets/zoombox.js"></script> 
<!-- TELEPHONE -->
<script type="text/javascript" src="/assets/telephone.js"></script> 
<!-- CUSTOM -->
<script type="text/javascript" src="/assets/main.js"></script> 

</body>
</html>