<?php
// Template Name: Contato
	get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php include(TEMPLATEPATH . "/inc/introducao.php")?>
	
<!-- Orçamento-->
<section class="contato container fadeInDown" data-anime="1200">
	<form id="form_orcamento" method="POST" action="<?php echo get_template_directory_uri(); ?>/enviar.php" class="contato_form grid-8 formphp">
		<label for="nome">Nome</label>
		<input type="text" id="nome" name="nome" required>
		<label for="email">E-mail</label>
		<input type="email" id="email" name="email" required>
		<label for="telefone">Telefone</label>
		<input type="text" id="telefone" name="telefone">

		<!-- Impedir que um robo envie span -->
		<label class="nao-aparece">Se você não é um robo, deixe em branco.</label>
		<input type="text" class="nao-aparece" name="leaveblank">
		<label class="nao-aparece">Se você não é um robo, não mude este campo.</label>
		<input type="text" class="nao-aparece" name="dontchange" value="http://">
		<!-- Impedir que um robo envie span -->

		<label for="mensagem">Mensagem</label>
		<textarea id="mensagem" name="mensagem" required></textarea>
		<button id="enviar" name="enviar" type="submit" class="btn btn-preto">Enviar</button>
	</form>
	<div class="contato_dados grid-8">
		<h3>Dados</h3>
		<span><?php the_field('telefone'); ?></span>
		<span><?php the_field('email'); ?></span>
		<span><?php the_field('endereco1'); ?></span>
		<span><?php the_field('endereco2'); ?></span>

		<h3>Redes Sociais</h3>
		<?php include(TEMPLATEPATH . "/inc/redes-sociais.php"); ?>
	</div>
</section>
<!-- Orçamento-->

<!-- Mapa-->
<section class="container contato_mapa">
	<a href="<?php the_field('link_mapa'); ?>" target="_blank" class="grid-16"><img src="<?php the_field('imagem_mapa'); ?>" alt="Endereço da bikcraft"></a>
</section>
<!-- Mapa-->
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>