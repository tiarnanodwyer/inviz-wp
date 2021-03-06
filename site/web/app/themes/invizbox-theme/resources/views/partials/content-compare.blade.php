<div class="plain-header">
	<div class="container">
<div class="row">
	<div class="col-12">
		<img src="<?php the_field( 'hero_image' ); ?>" alt="">
		<h1 class="text-center"><?php the_field( 'hero_title' ); ?></h1>
		<div class="text-center"><?php the_field( 'hero_tagline' ); ?></div>
	</div>
</div>
	</div>
</div>


<!-- <div class="ip-address-why" class="jumbotron-heading"><p>Your IP is <strong><?php the_field( 'ip' ); ?></strong>Let's keep it secure!</p></div> -->

<!-- Product Intro Panel-->
<div class="product-intro-panel">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
			</div>
		</div>
		<div class="row">
			<?php while ( have_rows( 'problem_proposal' ) ) : the_row();
			$title = get_sub_field( 'title' );
			$text = get_sub_field( 'content' );
			$image = get_sub_field( 'image' );
			?>
			<div class="col-md-4">
				<div class="product-info">
					<img src="<?php echo $image; ?>" alt="">
					<h3><?php echo $title; ?></h3>
					<p><?php echo $text; ?></p>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
</div>
</div>


<div class="text-center">
	<a href="" class="btn btn-cta-rounded-lg">Order your InvizBox</a>
	<p>30 Day money back guarantee</p>
</div>

<!-- Stat Box -->
<div class="stat-box">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php the_field( 'stat_box' ); ?>
			</div>
		</div>
	</div>
</div>



<!-- Product Panel-->
<div class="container">
	<hr>
	<h2 class="text-center">InvizBox products provide 24/7 security</h2>
	<p class="tagline text-center">At home, at work or on the move, our range of products are designed to provide total protection to your online presence. 
	</p>
	<div class="row products-panel-holder">
		<?php 
		if( have_rows('products') ):  
			$count = 0;
		while ( have_rows('products') ) : 
			the_row(); 
		$title = get_sub_field( 'title' );
		$text = get_sub_field( 'content' );
		$image = get_sub_field( 'image' );
		$link_learn = get_sub_field( 'link_learn' );
		$link_order = get_sub_field( 'link_order' );
		?>
		<div class="col-md-6" role="presentation"<?php 
		if (!$count) {
			?> class="active"<?php 
		}
		?>>
		<div class="products-panel">
			<img src="<?php echo $image; ?>" alt="">
			<h5><?php echo $title; ?></h5>
			<div><?php echo $text; ?></div>
			<a href="<?php echo $link_order; ?>" class="btn btn-primary">Order Now</a>
		</div>
	</div>
	<?php 
	$count++;
	endwhile;
	endif; 
	?>
</div>
</div>

<!-- As Featured Panel-->
<?php if ( have_rows( 'featured_on' ) ): ?>
	<div class="panel-featured-on">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="sub-capital text-center">INVIZBOX HAS BEEN PROUDLY RECOMMENDED BY:</h2>
				</div>
			</div>
			<div class="row">
				<?php while ( have_rows( 'featured_on' ) ) : the_row();
				$image = get_sub_field( 'image' );
				$title = get_sub_field( 'title' );
				$url = get_sub_field( 'url' );
				?>
				<div class="col">
					<div class="accreditation">
						<a href="<?php echo $url; ?>">
							<img src="<?php echo $image; ?>" alt="">
							<!-- <p><?php echo $title; ?></p> -->
						</a>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>


<!-- Features Panel-->
<?php if ( have_rows( 'features' ) ): ?>
	<div class="panel-features">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center">Award Winning Protection</h2>
					<p class="tagline text-center">All our devices are packed full of features</p>
				</div>
			</div>
			<div class="row">
				<?php while ( have_rows( 'features' ) ) : the_row();
				$title = get_sub_field( 'title' );
				$text = get_sub_field( 'text' );
				$image = get_sub_field( 'image' );
				?>
				<div class="col-md-6 col-lg-4">
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



<!-- Open Source Panel -->
<?php
if ( ! have_rows( 'open_source',35 ) ) {
	return false;
}
if ( have_rows( 'open_source',35 ) ) : ?>
<?php while ( have_rows( 'open_source',35 ) ) : the_row();

// vars
$title = get_sub_field('title');
$tagline = get_sub_field('tagline');
$image = get_sub_field('image');

// Feature Repeater.
if ( have_rows( 'feature' ) ) : ?>

<div class="panel-open-source">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-9">
				<h2 class="text-center"><?php echo $title; ?></h2>
				<p class="tagline text-center"><?php echo $tagline; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<img class="hero-image" src="<?php echo $image; ?>" alt="">
			</div>
			<div class="col-md-6">
				<div class="row">
					<?php
					while ( have_rows( 'feature' ) ) : the_row();
					$title = get_sub_field( 'feature_title' );
					$content = get_sub_field( 'feature_content' );
					?>
					<div class="col-6">
						<div class="media-body">
							<img src="<?= get_template_directory_uri(); ?>/assets/images/tick.png">
							<h5 class="mt-0"><?php echo esc_html( $title ); ?></h5>
							<p><?php echo esc_html( $content ); ?></p>
						</div>
					</div>
				<?php endwhile; ?> 
			</div>
		</div>
	</div>
</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>



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
