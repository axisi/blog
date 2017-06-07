<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog ALX - Panel administracyjny</title>
	
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
				<h1>Blog ALX - Panel administracyjny </h1>
			</div>
		</div>
		
		<!-- div.row>div.col-xs-12>nav.navbar.navbar-default -->
		<div class="row">
			<div class="col-xs-12">
				<nav class="navbar navbar-default">
					<!-- ul.nav.navbar-nav>li>a{Strona główna} -->
					<ul class="nav navbar-nav">
						<li><a href="index.php">Wpisy</a></li>
						<li><a href="wyloguj.php">Wyloguj się</a></li>
					</ul>				
				</nav>
			</div>
		</div>