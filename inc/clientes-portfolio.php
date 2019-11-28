<?php $portfolio = get_page_by_title('portfolio'); ?>

<ul class="portifolio_lista">

	<?php if(have_rows('item_portfolio', $portfolio)): while(have_rows('item_portfolio', $portfolio)) : the_row(); ?>

		<?php if(have_rows('lista_imagem_portfolio', $portfolio)): while(have_rows('lista_imagem_portfolio', $portfolio)) : the_row(); ?>
		<li class="grid-8"><img src="<?php the_sub_field('imagem_portfolio_tamanho_8', $portfolio); ?>" alt="<?php the_sub_field('descricao_imagem_portfolio_tamanho_8', $portfolio); ?>"></li>
		<?php endwhile; else : endif; ?>
		
		<li class="grid-16"><img src="<?php the_sub_field('imagem_portfolio_tamanho_16', $portfolio); ?>" alt="<?php the_sub_field('descricao_imagem_portfolio_tamanho_16', $portfolio); ?>"></li>

	<?php endwhile; else : endif; ?>
</ul>

<?php if (is_page('home')) { ?>
<div class="call">
	<p><?php the_field('chamada_portfolio', $portfolio); ?></p>
	<a href="/Bikcraft/portifolio" class="btn">Portfólio</a>
</div>
<?php } ?>