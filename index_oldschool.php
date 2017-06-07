<?php
	pg_connect("host='localhost' dbname='20170325zdev'
				user='20170325zdev' password='20170325zdev'");
	
	$r = pg_query("select *, to_char(data, 'YYYY-MM-DD HH24:MI:SS') as data_f from wpisy order by data DESC, id");
	$wpisy = pg_fetch_all($r);
	
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog ALX</title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/readable/bootstrap.min.css" rel="stylesheet" integrity="sha384-Li5uVfY2bSkD3WQyiHX8tJd0aMF91rMrQP5aAewFkHkVSTT2TmD2PehZeMmm7aiL" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	
	<!-- div.container -->
	<div class="container">
		
		<!-- div.row>div.col-xs-12>h1{Blog ALX} -->
		<div class="row">
			<div class="col-xs-12">
				<h1>Blog ALX</h1>
			</div>
		</div>
		
		<!-- div.row>div.col-xs-12>nav.navbar.navbar-default -->
		<div class="row">
			<div class="col-xs-12">
				<nav class="navbar navbar-default">
					<!-- ul.nav.navbar-nav>li>a{Strona główna} -->
					<ul class="nav navbar-nav">
						<li><a href="">Strona główna</a></li>
					</ul>				
				</nav>
			</div>
		</div>
		
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
		
		<div class="row">
			<div class="col-xs-12">
				<footer class="small">
					<small>&copy; ALX Students 2017</small>
				</footer>
			</div>
		</div>
	</div>
	
</body>
</html>