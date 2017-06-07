<?php include "naglowek.php" ?>


<div class="row">
	<div class="col-xs-12">
		<h2>Wpisy</h2>
		<a href="nowy-wpis.php" class="btn btn-primary">Nowy wpis</a>
	</div>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<td>ID</td>
				<td>TEMAT</td>
				<td>DATA</td>
				<td>Akcje</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach($wpisy as $wpis): ?>
				<tr>
					<td> <?=$wpis['id'];?></td>
					<td> <?=$wpis['temat'];?></td>
					<td> <?=date('Y-m-d H:i:s',strtotime($wpis['data']));?></td>
					<td>
						<a href="../wpis.php?id=<?=$wpis['id'];?>" class="btn btn-info" target="blank">Pokaż</a>
						<a href="edytuj-wpis.php?id=<?=$wpis['id'];?>" class="btn btn-primary" target="blank">Edytuj</a>
						<a href="usun-wpis.php?id=<?=$wpis['id'];?>" class="btn btn-danger" target="blank">Usuń</a>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>


<?php include "stopka.php" ?>