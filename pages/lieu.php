<?php $title = "Le Lieu - "; ?>

<div class="container-">
	<div class="row">
		<div class="col-md-12">
			<section id="lieu_1" class="text-center" style="background-image: url('<?= cockpit('regions:region_field', 'Lieu', 'header', 'value'); ?>');"></section>	
		</div>
	</div>
</div>

<section id="lieu_2">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img src="<?= cockpit('regions:region_field', 'Lieu', 'img_1', 'value'); ?>">	
				<?= cockpit('regions:region_field', 'Lieu', 'texte_1', 'value'); ?>
			</div>
			<div class="col-md-4">
				<img src="<?= cockpit('regions:region_field', 'Lieu', 'img_2', 'value'); ?>">	
				<?= cockpit('regions:region_field', 'Lieu', 'texte_2', 'value'); ?>
			</div>
			<div class="col-md-4">
				<img src="<?= cockpit('regions:region_field', 'Lieu', 'img_3', 'value'); ?>">	
				<?= cockpit('regions:region_field', 'Lieu', 'texte_3', 'value'); ?>
			</div>
		</div>
	</div>
</section>

<div class="container-">
	<div class="row">
		<div class="col-md-12">
			<section id="lieu_3" class="text-center" style="background-image: url('<?= cockpit('regions:region_field', 'Lieu', 'header_menu', 'value'); ?>');">
				<img src="<?= cockpit('regions:region_field', 'Lieu', 'header_menu_ico', 'value'); ?>">	
			</section>			
		</div>
	</div>
</div>

<section id="lieu_4">
	<div class="container">
		<div class="row">
			<div class="scrollme"><div class="animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0.5" data-translatex="-200">
				<div class="col-md-12">
					<h1>Restaurant</h1>
					<hr>
				</div>
				<div class="col-md-4">
					<?= cockpit('regions:region_field', 'Lieu', 'col_1', 'value'); ?>
				</div>
				<div class="col-md-4">
					<?= cockpit('regions:region_field', 'Lieu', 'col_2', 'value'); ?>
				</div>
				<div class="col-md-4">
					<?= cockpit('regions:region_field', 'Lieu', 'col_3', 'value'); ?>
				</div>
			</div></div>
		</div>
	</div>
</section>

<div class="container_">
	<div class="row">
		<div class="col-md-12">
			<section id="home_2" class="text-center" style="background-image: url('<?= cockpit('regions:region_field', 'Réservation', 'header', 'value'); ?>');">
				<img src="<?= cockpit('regions:region_field', 'Réservation', 'header_ico', 'value'); ?>">
				<div id="text_reservation" class="text-center"><?= cockpit('regions:region_field', 'Réservation', 'texte', 'value'); ?></div>
			</section>			
		</div>
	</div>
</div>

<section id="lieu_6">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Réservations</h2>
				<hr>
			</div>
			<div class="col-md-6">
				<?php include('assets/reservation.php'); ?>
			</div>
			<div class="scrollme"><div class="animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0.5" data-translatex="200">
				<div class="col-md-3 col-xs-6">				
					<div class="illu" style="background-image: url('<?= cockpit('regions:region_field', 'Lieu', 'img_footer_1', 'value'); ?>')"></div>				
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="illu" style="background-image: url('<?= cockpit('regions:region_field', 'Lieu', 'img_footer_2', 'value'); ?>')"></div>				
				</div>
			</div></div>
		</div>
	</div>
</section>