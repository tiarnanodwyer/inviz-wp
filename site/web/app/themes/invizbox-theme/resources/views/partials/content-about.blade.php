<div class="plain-header-left">
	<div class="container" style="background-image: url(<?php the_field( 'hero_image' ); ?>);">
		<div class="row">
			<div class="col-12">
				<div class="details">
					<h1><?php the_field( 'title' ); ?></h1>
					<p><?php the_field( 'sub_title' ); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Team Panel-->
<div class="team-panel">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10">
				<h2 class="text-center">Meet our Team</h2>
				<p class="tagline text-center">We have over 60 years experience in data security and product development.</p>
				<div class="row">
					<?php while ( have_rows( 'team' ) ) : the_row();
					$title = get_sub_field( 'title' );
					$text = get_sub_field( 'content' );
					$image = get_sub_field( 'image' );
					?>
					<div class="col-sm-6">
						<div class="team-info">
							<div><img src="<?php echo $image; ?>" alt=""></div>
							<h3><?php echo $title; ?></h3>
							<p><?php echo $text; ?></p>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>
</div>



<!-- As Featured Panel-->

<div class="panel-featured-on">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="sub-capital text-center">OUR PRODUCTS HAVE BEEN PROUDLY RECOMMENDED BY:</h2>
			</div>
		</div>
		<div class="row justify-content-center">
			
			<?php if( have_rows('featured_on', 141) ): ?>
			<?php while( have_rows('featured_on', 141) ): the_row(); ?>
			<div class="col-4">
				<div class="accreditation">
					<a href="<?php the_sub_field('url'); ?>">
						<img src="<?php the_sub_field('image'); ?>" alt="">
					</a>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
	
</div>


</div>
</div>

<!-- Journey Panel-->
<div class="container">
	<div class="row justify-content-center">
		<div class="col-12 col-md-10">
			<div class="general">
				<h2 class="text-center">We've had quite a journey</h2>
				<p class="tagline text-center">We are growing rapidly and winning a few awards along the way!</p>
				<p><?php the_field( 'content' ); ?></p>
			</div>
		</div>
	</div>
</div>


<!-- Testimonial -->
<div class="panel-testimonial">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<?php if( have_rows('testimonial', 134) ): ?>
				<?php while( have_rows('testimonial', 134) ): the_row(); ?>
				<img src="<?php the_sub_field('image'); ?>" alt="">
				<p>&quot;<?php the_sub_field('content'); ?>&quot;
					<span><?php the_sub_field('details'); ?></span>
				</p>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
</div>
</div>