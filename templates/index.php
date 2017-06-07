<?php include "naglowek.php"; ?>

<!-- div.row>div.col-xs-12 -->
<div class="row">
	<div class="col-xs-12">
		<h2>Wpisy</h2>
		
		<?php foreach($wpisy as $wpis): ?>
			<div> 
				<h3><?= $wpis['temat']; ?></h3>
				<p class="text-muted">
					<?php 
						// $wpis['data_f']; // 1 sposob, baza danych
						
						// 2 sposob PHP
						$timestamp = strtotime($wpis['data']);
						// echo date('Y-m-d H:i:s', $timestamp);
						
						// 3 sposob PHP
						$dt = new DateTime($wpis['data']);
						echo $dt->format('Y-m-d H:i:s'); 
					?>
				</p>
				<p class="lead">
					<?php
						echo substr($wpis['tresc'], 0, 152) . '...';
					?>
				</p>
				<div class="text-right">
					<a href="wpis.php?id=<?= $wpis['id']; ?>">Czytaj więcej...</a>
				</div>
			</div>
		<?php endforeach; ?>
	
	</div>
</div>

<?php include "stopka.php"; ?>