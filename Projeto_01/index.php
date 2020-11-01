<?php include('config.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Projeto 01</title>
	<link rel="icon" href="<?php echo INCLUDE_PATH; ?> images/piano.jpg" sizes="16x16 32x32" type="image/png">
	<meta name="theme-color" content="#4285f4">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/fontawesome.css">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/solid.css">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/brands.css"> 	
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Descrição do meu website!">
	<meta name="keywords" content="palavras-cgave,do,meu,site">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url) {
			case 'sobre':
				echo '<target target="sobre" />';
				break;

			case 'servicos':
				echo '<target target="servicos" />';
				break;

		}

	?>

	<header>
		<div class="center">
			<div class="logo left"><a href="/">Logomarca</a></div><!--logo-->
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<nav class="mobile right">
				<div class="botao-menu-mobile">
					<i class="fas fa-bars"></i>
				</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<div class="clear"></div><!--clear-->
		</div><!--center-->
	</header>

	<?php
		
		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}else{
			//podemos fazer oque quiser pois a página não existe.
			if($url != 'sobre' && $url != 'servicos'){
				$pagina404 = true;
				include('pages/404.php');
			}else{
				include('pages/home.php');
			}
		}
	?>

	<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
		<div class="center">
			<p>Todos os direitos reservados!</p>
		</div><!--center-->
	</footer>

	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
	<?php 
		if ($url == 'contato') {
	?>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEJCodTNdV_8qlvZ1dI6IqKYKH3qOsU84&callback=initMap&libraries=&v=weekly" defer></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
	<?php  } ?>
</body>
</html>