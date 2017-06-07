<?php include "naglowek.php"; ?>

<div class="row">
	<div class="col-xs-12">
		<h2><?= $wpis['temat'];?></h2>
		<p class="text-muted">
			<?=date('Y-m-d H:i:s', strtotime($wpis['data']));?>
		</p>
		<div><?=$wpis['tresc']; ?></div>
	</div>
</div>
<div class="row">
	<div class="col-xs-6">
		<h3>Komentarze</h3>
		<?php if(!empty($komentarze)):?>
		
		<?php foreach($komentarze as $komentarz): ?>
			<div>
				<h4>
					<?=$komentarz['autor']; ?>
				</h4>
				
				<span class="text-muted">
					<?=date('Y-m-d H:i:s', strtotime($komentarz['data']));?>
				</span>
				
				<p>
					<?=$komentarz['tresc']; ?>
				</p>
			</div>
		<?php endforeach; ?>
		
		<?php else:?>
		<div>Brak komentarzy!</div>
		<?php endif;?>
	</div>
	<div class="col-xs-6">
			<h3>Dodaj komentarz</h3>
			<form action="dodaj-komentarz.php" method="post" class="form-horizontal">
				<fieldset>
					<label for="autor">Autor</label>
					<input type="text" name="autor" id="autor" class="form-control" required="required">
					<label for="tresc">Treść</label>
					<textarea name="tresc" id="tresc" class="form-control"required="required"></textarea>
					<input type="hidden" name="wpis_id" value="<?=$wpis['id'];?>">
					<input type="submit" class="btn btn-primary" value="Dodaj komentarz">
				</fieldset>
			</form>
	</div>
</div>
<?php include "stopka.php"; ?>
