<style type="text/css">
	.introducao_paginas {
		background: url("<?php the_field('background_interno'); ?>") no-repeat center;
		background-size: cover;
	}
</style>

<!-- Introdução-->
<section class="introducao_paginas">
	<div class="container">
		<h1 data-anime="400" class="fadeInDown"><?php the_title(); ?></h1>
		<p data-anime="800" class="fadeInDown"><?php the_field('subtitulo'); ?></p>
	</div>
</section>
<!-- Introdução-->
