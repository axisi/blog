<?php include "naglowek.php";?>

<div class="row">
	<div class="col-xs-4 col-xs-offset-4">
	
		<form action="zaloguj.proc.php" method = "post" class="form-horizontal">
		
			<fieldset>
				<label for="login">Login</label>
				<input type="text" name= "login" id ="login" class="form-control" required="required" >
				
				<label for="gaslo">Hasło</label>
				<input type="password" name= "haslo" id ="haslo" class="form-control" required="required" >
				
				<input type="submit" class="btn btn-primary" value= "Zaloguj">
			</fieldset
		
		</form>
	
	</div>
</div>

<?php include "stopka.php";?>