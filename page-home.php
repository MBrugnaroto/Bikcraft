<?php
// Template Name: Home
	get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- Introdução-->
<section class="introducao">
	<div class="container">
		<h1 data-anime="400" class="fadeInDown"><?php the_field('titulo_introducao'); ?></h1>
		<blockquote data-anime="800" class="quote-externo fadeInDown">
			<p><?php the_field('quote_introducao'); ?></p>
			<cite><?php the_field('citacao_introducao'); ?></cite>
		</blockquote>
		<a data-anime="1200" href="/Bikcraft/produtos/" class="btn">Orçamento</a>
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
		<p><?php the_field('chamada_introducao'); ?></p>
		<a href="/Bikcraft/produtos" class="btn btn-preto">Produtos</a>
	</div>

</section>
<!-- Produtos-->

<!-- Portifólio-->
<section class="portifolio">
	<div class="container">
		<h2 class="subtitulo">Portifólio</h2>
		<?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php")?>
	</div>
</section>
<!-- Portifólio-->

<!-- Qualidade-->
<?php include(TEMPLATEPATH . "/inc/qualidade.php"); ?>
<!-- Qualidade-->
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>

		