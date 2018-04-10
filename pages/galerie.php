<?php $title = "Galerie - ";
	
$items = cockpit('galleries:gallery','Photos'); ?>

<div class="container-">
	<div class="row">
		<div class="col-md-12">
			<section id="galerie_header" class="text-center" style="background-image: url('<?= cockpit('regions:region_field', 'Gallerie', 'header', 'value'); ?>');"></section>	
		</div>
	</div>
</div>
					
<section id="galerie_1">
	<h1 style="text-align: center;">Nos réalisations</h1>
	<div class="container">
		<div class="row">

			<?php $i = 1; foreach($items as $item): ?>
			
			<a href="<?= $item['path']; ?>" class="col-md-2 col-xs-6 zoombox zgallery<?= $i; ?>" style="background: url('<?= $item['path']; ?>') no-repeat center; height:200px; width:195px; background-size:cover; padding:0; margin:10px;">
				<div class="item_event">
					<div class="hover">
						<p><?= $item['data']['titre']; ?></p>
					</div>
					<!-- <img src="<?= $item['path']; ?>"> -->
				</div>
			</a>			

			<?php foreach($item['data']['gallerie'] as $galerie){							
				echo '<a href="'.$galerie['path'].'" class="zoombox zgallery'.$i.'"></a>';
			}
			
			$i = $i++;
			
			endforeach; ?>		
			
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