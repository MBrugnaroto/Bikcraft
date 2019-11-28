<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?></title>
		<meta name="description" content="Compre a sua bicicleta personalisada na Bikcraft. Possuímos modelos de passeio, retrô e esporte.">

		<meta property="og:type" content="website">
		<meta property="og:title" content="<?php bloginfo('name'); ?>">
		<meta property="og:description" content="Compre a sua bicicleta personalisada na Bikcraft. Possuímos modelos de passeio, retrô e esporte.">
		<meta property="og:url" content="http://bikcraft.com">
		<meta property="og:image" content="http://bikcraft.com/img/og-image.png">

		<meta name="viewport" content="widh=device-width, initial-scale=1">

		<link rel="shortcut icon" href="favicon.ico">

		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
		<script>document.documentElement.classList.add("js");</script>

		<!-- Inicio WordPress Header -->
		<?php wp_head(); ?>
		<!-- Final WordPress Header -->
	</head>
	<body>
		<header class="header">
			<div class="container">
				<a href="/bikcraft/home/" class="grid-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/bikcraft.svg" alt="bikcraft">
				</a>
				<nav class="grid-12 header_menu">
					<ul>
						<li><a href="/sobre/">Sobre</a></li>
						<li><a href="/produtos/">Produtos</a></li>
						<li><a href="/portfolio/">Portifólio</a></li>
						<li><a href="/contato/">Contato</a></li>
					</ul>
				</nav>
			</div>
		</header>