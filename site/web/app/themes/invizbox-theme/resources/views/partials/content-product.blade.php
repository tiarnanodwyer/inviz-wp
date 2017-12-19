<section class="jumbotron">
        <div class="container">
            <div class="jumbotron-detail-product">
                <h1 class="jumbotron-heading"><?php the_field('hero_title'); ?></h1>
                <p class="lead text-muted"><?php the_field('hero_title'); ?></p>

            </div>
        </div>
    </section>


    <div class="container">
	<div class="row justify-content-md-center">
		<div class="col-sm-10 text-center">
			<img src="assets/invizbox-go-main.png" alt="" class="align-self-center">
			<p>
				<a href="store-invizbox-go.html" class="btn btn-secondary btn-lg btn-cta">Order Now</a>
			</p>
			<h2><?php the_field('intro_title'); ?></h2>
			<p class="tagline"><?php the_field('intro_text'); ?></p>
		</div>
	</div>
</div>




<?php if( have_rows('features') ): ?>
	<div class="panel-wide">
		<div class="container">
			<div class="row"><div class="col-12">
				<h2 class="caps text-center">Packed full of features</h2>
			</div>
		</div>
			<div class="row">
				<?php while ( have_rows('features') ) : the_row();
				// vars
				$title = get_sub_field('title');
				$text = get_sub_field('text');
				$image = get_sub_field('image');
				?>
				<div class="col-4">
					<div class="media">
						<img class="mr-3" src="<?php echo $image; ?>" alt="">
						<div class="media-body">
							<h5 class="mt-0"><?php echo $title; ?></h5>
							<p><?php echo $text; ?></p></div>
							</div>
							</div>

						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>


