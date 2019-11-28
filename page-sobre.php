<?php
// Template Name: Sobre
	get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php include(TEMPLATEPATH . "/inc/introducao.php")?>
	
<!-- História-->
<section class="container fadeInDown" data-anime="1200">
	<div class="grid-10 equipe_historia">
		<h2 class="subtitulo_pagina">Historia, missão e Visão</h2>
		<p>O verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana. Interesse por todos os detalhes da vida cotidiana.</p>
		<p>O verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana. Interesse por todos os detalhes da vida cotidiana.</p>
	</div>
	<div class="grid-6 equipe_valores">
		<h2 class="subtitulo_pagina">Valores</h2>
		<ul>
			<li>- Qualidade no processo com</li>
			<li>- Foco no cliente sem perder a</li>
			<li>- Diversão, preservando a</li>
			<li>- Natureza com sustentabilidade</li>
		</ul>
	</div>
	<div class="grid-16 equipe_imagem">
		<img src="img/equipe-bikcraft.jpg" alt="História">
	</div>
</section>
<!-- História-->

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
</section>
<!-- Qualidade-->
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>