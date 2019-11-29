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
		<?php the_field('missao'); ?>
	</div>
	<div class="grid-6 equipe_valores">
		<h2 class="subtitulo_pagina">Valores</h2>
		<?php the_field('valores'); ?>
	</div>
	<div class="grid-16 equipe_imagem">
		<img src="<?php the_field('imagem_equipe'); ?>" alt="História">
	</div>
</section>
<!-- História-->

<!-- Qualidade-->
<?php include(TEMPLATEPATH . "/inc/qualidade.php"); ?>
<!-- Qualidade-->
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>