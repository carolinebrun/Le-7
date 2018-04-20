<section id="slide">
	<div class="container-">
		<div class="row">
			<div class="col-md-12">			
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				
					<div class="carousel-inner" role="listbox">
						
						<div id="sur_slide">
							<?= cockpit('regions:region_field', 'Home', 'texte_slide', 'value'); ?>
						</div>
						
						<?php $i = 1; foreach(collection("Slideshow")->find() as $item): ?>
						
						<div class="item <?php if($i++==1){ echo 'active'; } ?>">
							<img src="<?= $item['img']; ?>" alt="meilleur-restaurant-perigueux">
						</div>
						
						<?php endforeach;?>

					</div>
					
<!--
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span>
					</a>
					
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span>
					</a>
-->
					
				</div>
			</div>
		</div>
	</div>
</section>

<section id="home_1">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-justify">
				<?= cockpit('regions:region_field', 'Home', 'texte', 'value'); ?>
			</div>
			<div class="col-md-6 visible-md-block visible-lg-block">
				<div class="row">
					<div class="scrollme"><div class="animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0.5" data-translatex="200">
						<div class="col-md-12">
							<?php include('assets/reservation.php'); ?>
						</div>
					</div></div>
				</div>
			</div>
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

<section id="home_3">
	<div class="container">
		<div class="row">
			<div class="scrollme"><div class="animateme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0.5" data-translatex="-200" style="display:flex;">
			<div class="col-md-2 col-xs-4">
				<!-- <?= thumbnail(cockpit('regions:region_field', 'Home', 'img_1', 'value'), 200, 200); ?> -->
				<img src="<?= cockpit('regions:region_field', 'Home', 'img_1', 'value'); ?>" alt="Café bar Périgueux">
			</div>
			<div class="col-md-2 col-xs-4">
				<!-- <?= thumbnail(cockpit('regions:region_field', 'Home', 'img_2', 'value'), 200, 200); ?> -->
				<img src="<?= cockpit('regions:region_field', 'Home', 'img_2', 'value'); ?>" alt="Restaurant fruits de mer Périgueux">
			</div>
			<div class="col-md-2 col-xs-4">
				<!-- <?= thumbnail(cockpit('regions:region_field', 'Home', 'img_3', 'value'), 200, 200); ?> -->
				<img src="<?= cockpit('regions:region_field', 'Home', 'img_3', 'value'); ?>" alt="Restaurant salades Périgueux">
			</div>
			<div class="col-md-2 col-xs-4">
				<!-- <?= thumbnail(cockpit('regions:region_field', 'Home', 'img_4', 'value'), 200, 200); ?> -->
				<img src="<?= cockpit('regions:region_field', 'Home', 'img_4', 'value'); ?>" alt="Restaurant Périgueux">
			</div>
			<div class="col-md-2 col-xs-4">
				<!-- <?= thumbnail(cockpit('regions:region_field', 'Home', 'img_5', 'value'), 200, 200); ?> -->
				<img src="<?= cockpit('regions:region_field', 'Home', 'img_5', 'value'); ?>" alt="Bar brasserie cocktails Périgueux">
			</div>
			<div class="col-md-2 col-xs-4">
				<!-- <?= thumbnail(cockpit('regions:region_field', 'Home', 'img_6', 'value'), 200, 200); ?> -->
				<img src="<?= cockpit('regions:region_field', 'Home', 'img_6', 'value'); ?>" alt="Restaurant tapas tartines Périgueux">
			</div>
			</div></div>
		</div>
	</div>
</section>