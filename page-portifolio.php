<?php
// Template Name: Portfólio
	get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php include(TEMPLATEPATH . "/inc/introducao.php")?>

<section class="container fadeInDown" data-slide="quote" data-anime="1200">
	<?php if(have_rows('item_quote',)): while(have_rows('item_quote')) : the_row(); ?>

	<blockquote class="quote_cliente">
		<?php the_sub_field('quote'); ?>
		<cite><?php the_sub_field('nome_quote'); ?></cite>
	</blockquote>
	
	<?php endwhile; else : endif; ?>
</section>

<!-- Portifólio-->
<section class="portifolio">
	<div class="container" data-slide="portifolio">
		<?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php")?>
	</div>
</section>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>