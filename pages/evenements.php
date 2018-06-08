<?php $title = "Events - ";
	
if($get_2!=''){ 
	$find['titre_slug'] = $get_2;
}

$item = collection("Events")->findOne([$find]); ?>

<div class="container-">
	<div class="row">
		<div class="col-md-12">
			<section id="lieu_1" class="text-center" style="background-image: url('<?= $item['header']; ?>');"></section>	
		</div>
	</div>
</div>

<section id="event_1">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="row">			
					<div class="col-md-12">
						<h1>En ce moment</h1>
					</div>

					<div class="col-md-3 col-xs-4 text-justify">
						<div id="date_event">
							<span id="date_event_jour"><?= $item['jour']; ?></span>
							<span id="date_event_mois"><?= $item['mois_lettre']; ?></span>
							<span id="date_event_annee"><?= $item['annee']; ?></span>
							<span id="date_event_heure"><?= $item['heure']; ?></span>
						</div>
					</div>			
					<div class="col-md-9 col-xs-8 text-justify">
						<h2><?= $item['titre']; ?></h2>
						<?= $item['texte']; ?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="illu" style="background-image: url('<?= $item['avatar']; ?>')"></div>
			</div>
		</div>
	</div>
</section>

<section id="event_2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<hr>
				<h2>Tous nos événements</h2>
			</div>
		</div>		
		<div class="row">

			<div class="scrollme" style="display:flex; flex-wrap:wrap;">
				<?php foreach(collection("Events")->find()->sort(["custom-order"=>1]) as $item): ?>
	
				<a href="/evenements/<?= $item['titre_slug']; ?>" class="col-md-2 col-xs-5" style="padding:0px; margin:12px;">
					<div class="item_event">
						<div class="hover">
							<p><?= $item['titre']; ?></p>
							<?= $item['jour']; ?> / <?= $item['mois_chiffre']; ?> / <?= $item['annee']; ?>
						</div>
						<img src="<?= $item['avatar']; ?>">
					</div>
				</a>			
				
				<?php endforeach;?>
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