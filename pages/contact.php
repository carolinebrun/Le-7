<?php $title = "Contact - "; ?>

<div class="container-">
	<div class="row">
		<div class="col-md-12">
			<section id="lieu_1" class="text-center" style="background-image: url('<?= cockpit('regions:region_field', 'Contact', 'header', 'value'); ?>');"></section>	
		</div>
	</div>
</div>

<section id="contact_2">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>Nous contacter</h1>
				<?= cockpit('regions:region_field', 'Contact', 'texte', 'value'); ?>
				
				<?php form('Contact'); ?>
				
					<fieldset class="form-horizontal" id="form">
					
						<div class="form-group">
							<div class="col-md-6">
								<input id="form[email]" name="form[email]" type="text" placeholder="E-mail (champ obligatoire)" class="form-control input-md" required="">
							</div>
							
							<div class="col-md-6">
								<input id="form[telephone]" name="form[telephone]" type="text" placeholder="Téléphone (champ obligatoire)" class="form-control input-md" required="">		
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-12">                     
								<textarea class="form-control" id="form[message]" name="form[message]" placeholder="Votre message (champ obligatoire)" required=""></textarea>
							</div>
						</div>
					
						<div class="form-group">
							<div class="col-md-4">
								<button id="" name="" class="btn btn-default">Envoyer</button>
							</div>
						</div>
					
					</fieldset>
				</form>

			</div>
			<div class="col-md-6">
				<a href="<?= cockpit('regions:region_field', 'Contact', 'url_gmap', 'value'); ?>" target="_blank"><img src="<?= cockpit('regions:region_field', 'Contact', 'map', 'value'); ?>"></a>
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