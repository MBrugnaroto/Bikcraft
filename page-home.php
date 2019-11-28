<?php
// Template Name: Home
	get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- Introdução-->
<section class="introducao">
	<div class="container">
		<h1 data-anime="400" class="fadeInDown">Bicicletas Feitas a Mão</h1>
		<blockquote data-anime="800" class="quote-externo fadeInDown">
			<p>"Não tenha nada em sua casa que você não considere útil ou acredita ser bonito"</p>
			<cite>WILLIAN MORRIS</cite>
		</blockquote>
		<a data-anime="1200" href="produtos.html" class="btn">Orçamento</a>
	</div>
</section>
<!-- Introdução-->

<!-- Produtos-->
<section class="produtos container fadeInDown" data-anime="1600">
	<h2 class="subtitulo">Produtos</h2>
	<ul class="produtos_lista">
		<li class="grid-1-3">
			<div class="produtos_icone">
				<img src="img/produtos/passeio.svg" alt="Bikcraft Passeio">
			</div>
			<h3>Passeio</h3>
			<p>Ainda assim, exitem dúvidas a respeito de como a necessidade de renovação</p>
		</li>

		<li class="grid-1-3">
			<div class="produtos_icone">
				<img src="img/produtos/retro.svg" alt="Bikcraft Retro">
			</div>
			<h3>Retro</h3>
			<p>Ainda assim, exitem dúvidas a respeito de como a necessidade de renovação</p>
		</li>

		<li class="grid-1-3">
			<div class="produtos_icone">
				<img src="img/produtos/esporte.svg" alt="Bikcraft Esporte">
			</div>
			<h3>Esporte</h3>
			<p>Ainda assim, exitem dúvidas a respeito de como a necessidade de renovação</p>
		</li>

	</ul>

	<div class="call">
		<p>Clique aqui e veja os detalhes dos produtos</p>
		<a href="produtos.html" class="btn btn-preto">Produtos</a>
	</div>

</section>
<!-- Produtos-->

<!-- Portifólio-->
<section class="portifolio">
	<div class="container">
		<h2 class="subtitulo">Portifólio</h2>
		<ul class="portifolio_lista">
			<li class="grid-8"><img src="img/portifolio/retro.jpg" alt="Bicicleta Retro"></li>
			<li class="grid-8"><img src="img/portifolio/passeio.jpg" alt="Bicicleta Passeio"></li>
			<li class="grid-16"><img src="img/portifolio/esporte.jpg" alt="Bicicleta Esporte"></li>	
		</ul>
		<div class="call">
			<p>Clique aqui e veja os detalhes do nosso portifólio</p>
			<a href="portifolio.html" class="btn">Portifólio</a>
		</div>
	</div>
</section>
<!-- Portifólio-->

<!-- Qualidade-->
<section class="qualidade container">
	<h2 class="subtitulo">Qualidade</h2>
	<img src="img/bikcraft-qualidade.svg" alt="Bikcraft">
	<ul class="qualidade_lista">
		<li class="grid-1-3">
			<h3>Durabilidade</h3>
			<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
		</li>
		<li class="grid-1-3">
			<h3>Design</h3>
			<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
		</li>
		<li class="grid-1-3">
			<h3>Sustentabilidade</h3>
			<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
		</li>
	</ul>
	<div class="call">
		<p>Conheça mais a nossa história</p>
		<a href="sobre.html" class="btn btn-preto">Sobre</a>
	</div>
</section>
<!-- Qualidade-->
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>

		