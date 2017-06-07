<?php include "naglowek.php"; ?>


<div class="row">
	<div class="col-xs-8 col-xs-offset-2">
		<form action="nowy-wpis.proc.php" method="post" class="form-horizontal">
			<fieldset>
				<label for="temat">Temat</label>
				<input type="text" name="temat" id="temat" class="form-control" required="required" >
				
				<label for="tresc">Tresc</label>
				<textarea name="tresc" class="form-control" id="tresc" cols="30" rows="10"></textarea>
				
				<input type="submit" value= "zapisz" class="btn btn-primary">
			</fieldset>
		</form>
	</div>
</div>

<?php include "stopka.php"; ?>


