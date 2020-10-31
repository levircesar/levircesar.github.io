<!DOCTYPE html>
<html>
<head>
	<title>Projeto 01</title>
	<link rel="icon" href="images/piano.jpg" sizes="16x16 32x32" type="image/png">
	<meta name="theme-color" content="#4285f4">
	<link rel="stylesheet" href="estilo/fontawesome.css">
	<link rel="stylesheet" href="estilo/solid.css">
	<link rel="stylesheet" href="estilo/brands.css"> 	
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Descrição do meu website!">
	<meta name="keywords" content="palavras-cgave,do,meu,site">
	<meta charset="utf-8">
</head>
<body>
	<header>
		<div class="center">
			<div class="logo left">Logomarca</div><!--logo-->
			<nav class="desktop right">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Sobre</a></li>
					<li><a href="">Serviços</a></li>
					<li><a href="">Contato</a></li>
				</ul>
			</nav>
			<nav class="mobile right">
				<div class="botao-menu-mobile">
					<i class="fas fa-bars"></i>
				</div>
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Sobre</a></li>
					<li><a href="">Serviços</a></li>
					<li><a href="">Contato</a></li>
				</ul>
			</nav>
			<div class="clear"></div><!--clear-->
		</div><!--center-->
	</header>

	<section class="banner-principal">
		<div class="overlay"></div><!--overlay-->
		<div class="center">
			<form>
				<h2>Qual o seu melhor e-mail?</h2>
				<input type="email" name="email" required>
				<input type="submit" name="acao" value="Cadastrar!">
			</form>
		</div><!--center-->
	</section><!--banner-principal-->

	<section class="descricao-autor">
		<div class="center">
			<div class="w50 left">
				<h2>Levir César</h2>
				<p>Sed ultricies tellus at aliquam elementum. Donec lobortis sapien in congue pulvinar. Nulla dictum tellus et blandit accumsan. Maecenas sodales lorem ante. Morbi pharetra ullamcorper est eget semper. Etiam pulvinar mollis sapien. Fusce id vestibulum nisi. Sed maximus molestie luctus. Ut id ante id neque finibus sollicitudin. Sed a mi rhoncus, faucibus nulla et, gravida elit. Suspendisse sollicitudin massa a dui placerat vulputate. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat est vitae felis finibus, vitae gravida mi tincidunt.</p>
				<p>Donec iaculis, sem sit amet ultrices rhoncus, ipsum lectus mollis diam, vitae malesuada neque risus dignissim metus. In hac habitasse platea dictumst. Sed volutpat nisl ut dolor tincidunt, quis rhoncus turpis mollis. Morbi et vulputate ante. Fusce lobortis pretium lorem in congue. Pellentesque auctor aliquet nisl, non pretium libero ultrices et. Suspendisse elementum turpis vitae accumsan aliquam. Suspendisse non porttitor nibh. Nulla quis elit sapien. Suspendisse varius laoreet elit vitae tincidunt. Curabitur in rhoncus justo. Nulla placerat nec velit ac interdum.</p>
			</div><!--w50-->
			<div class="w50 left">
				<img class="right" src="images/imagem.png">
			</div><!--w50-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--descricao-autor-->

	<section class="especialidades">
		<div class="center">
			<h2 class="title">Especialidades</h2>
			<div class="w33 left box-especialidade">
				<h3><i class="fab fa-css3"></i></h3>
				<h4>CSS3</h4>
				<p>Sed ultricies tellus at aliquam elementum. Donec lobortis sapien in congue pulvinar. Nulla dictum tellus et blandit accumsan. Maecenas sodales lorem ante. Morbi pharetra ullamcorper est eget semper. Etiam pulvinar mollis sapien. Fusce id vestibulum nisi. Sed maximus molestie luctus. Ut id ante id neque finibus sollicitudin. </p>
			</div><!--box-especialidade-->
			<div class="w33 left box-especialidade">
				<h3><i class="fab fa-html5"></i></h3>
				<h4>HTML5</h4>
				<p>Sed ultricies tellus at aliquam elementum. Donec lobortis sapien in congue pulvinar. Nulla dictum tellus et blandit accumsan. Maecenas sodales lorem ante. Morbi pharetra ullamcorper est eget semper. Etiam pulvinar mollis sapien. Fusce id vestibulum nisi. Sed maximus molestie luctus. Ut id ante id neque finibus sollicitudin. </p>
			</div><!--box-especialidade-->
			<div class="w33 left box-especialidade">
				<h3><i class="fab fa-codepen"></i></h3>
				<h4>Java Script</h4>
				<p>Sed ultricies tellus at aliquam elementum. Donec lobortis sapien in congue pulvinar. Nulla dictum tellus et blandit accumsan. Maecenas sodales lorem ante. Morbi pharetra ullamcorper est eget semper. Etiam pulvinar mollis sapien. Fusce id vestibulum nisi. Sed maximus molestie luctus. Ut id ante id neque finibus sollicitudin. </p>
			</div><!--box-especialidade-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--especialidades-->

	<section class="extras">
		<div class="center">
			<div class="w50 left depoimentos-container">
				<h2 class="title">Depoimentos dos nossos clientes!</h2>
				<div class="depoimento-single">
					<p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non libero nibh. Cras in ante nisl. Nam vitae consequat mi. Aenean pellentesque ornare libero in finibus. Nullam urna dolor, imperdiet eget porta eu, tempus vitae nisi. Vivamus ligula orci, faucibus nec magna fermentum, imperdiet mollis orci."</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non libero nibh. Cras in ante nisl. Nam vitae consequat mi. Aenean pellentesque ornare libero in finibus. Nullam urna dolor, imperdiet eget porta eu, tempus vitae nisi. Vivamus ligula orci, faucibus nec magna fermentum, imperdiet mollis orci."</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non libero nibh. Cras in ante nisl. Nam vitae consequat mi. Aenean pellentesque ornare libero in finibus. Nullam urna dolor, imperdiet eget porta eu, tempus vitae nisi. Vivamus ligula orci, faucibus nec magna fermentum, imperdiet mollis orci."</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--depoimento-single-->
			</div><!--w50-->
			<div class="w50 left servicos-container">
				<h2 class="title">Serviços</h2>
				<div class="servicos">
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non libero nibh. Cras in ante nisl. Nam vitae consequat mi.Sed ultricies tellus at aliquam elementum. Donec lobortis sapien in congue pulvinar. Nulla dictum tellus et blandit accumsan. Maecenas sodales lorem ante. </li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non libero nibh. Cras in ante nisl. Nam vitae consequat mi.Sed ultricies tellus at aliquam elementum. Donec lobortis sapien in congue pulvinar. Nulla dictum tellus et blandit accumsan. Maecenas sodales lorem ante. </li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non libero nibh. Cras in ante nisl. Nam vitae consequat mi.Sed ultricies tellus at aliquam elementum. Donec lobortis sapien in congue pulvinar. Nulla dictum tellus et blandit accumsan. Maecenas sodales lorem ante. </li>

					</ul>
				</div><!--servicos-->
			</div><!--w50-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--extras-->

	<footer>
		<div class="center">
			<p>Todos os direitos reservados!</p>
		</div><!--center-->
	</footer>
	<script src="js/jquery.js"></script>
</body>
</html>