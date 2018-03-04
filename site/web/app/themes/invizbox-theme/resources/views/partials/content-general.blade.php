<section class="jumbotron" style="background-image: url(<?php the_field( 'hero_image' ); ?>);">
	<div class="container">
		<div class="jumbotron-detail-general">
			<h1 class="jumbotron-heading"><?php the_field( 'title' ); ?></h1>

			<p class="lead text-muted"><?php the_field( 'sub_title' ); ?></p>
		</div>
	</div>
</section>
<div class="container">
<div class="row justify-content-center">
	<div class="col-sm-8">
		<div class="general">
		<h3>Our Story</h3>
	<p><?php the_field( 'content' ); ?></p>
</div>
	</div>
</div>
</div>