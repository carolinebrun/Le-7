<?php form('Reservation'); ?>

	<fieldset class="form-horizontal" id="form-reservation">
	
		<div class="form-group">
			<div class="col-md-12">
				<input id="date" name="form[date]" type="text" class="form-control input-md">    
			</div>
		</div>
		
		<hr>
		
		<div class="form-group">
			<div class="col-md-4">
				<input name="form['nom']" type="text" placeholder="Votre nom (champ obligatoire)" class="form-control input-md" required="">
			</div>
			
			<div class="col-md-4">
				<input id="telephone" name="form[tel]" type="text" placeholder="Numéro de téléphone (champ obligatoire)" class="form-control input-md" required="">
			</div>

			<div class="col-md-4">
				<select name="form[convives]" class="form-control">
					<option>1 personne</option>
					<option>2 personnes</option>
					<option>3 personnes</option>
					<option>4 personnes</option>
					<option>5 personnes</option>
					<option>6 personnes</option>
					<option>> 6 personnes</option>
				</select>
			</div>
		</div>
		
		<div class="form-group">			
			<div class="col-md-6">
				<input name="form[email]" type="text" placeholder="E-mail (champ obligatoire)" class="form-control input-md" required="">
			</div>
			<div class="col-md-6">
				<button class="btn btn-default">Réserver</button>
				<span class="infos"><b>ou par téléphone au : <br><?= cockpit('regions:region_field', 'Setup', 'tel', 'value'); ?></span>
			</div>
		</div>
	
	</fieldset>
</form>
