<?php include "naglowek.php"; ?>

<div class="row">
	<div class="col-xs-8 col-xs-offset-2">
		<form action="edytuj-wpis.proc.php" method="post" class="form-horizontal">
			<fieldset>
				<label for="temat">Temat</label>
				<input type="text" name="temat" id="temat" class="form-control" required="required" value="<?=$wpis['temat']?>">
				
				<label for="tresc">Tresc</label>
				<textarea name="tresc" class="form-control" id="tresc" cols="30" rows="10"><?=$wpis['tresc']?></textarea>
				
				<input type="hidden" name="id" value="<?=$wpis['id']?>">
				
				<input type="submit" value= "zapisz" class="btn btn-primary">
			</fieldset>
		</form>
	</div>
</div>


<?php include "stopka.php"; ?>