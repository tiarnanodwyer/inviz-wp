<section class="jumbotron jumbotron-product" style="background-image: url(<?php the_field( 'jumbotron' ); ?>);">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-md-5">		<div class="jumbotron-detail-product">
				<p class="product"><?php single_post_title(); ?></p>
				<h1 class="jumbotron-heading"><?php the_field( 'hero_title' ); ?></h1>
				<p class="lead"><?php the_field( 'hero_tagline' ); ?></p>
				<a href="<?php the_field( 'buy' ); ?>" class="btn btn-primary btn-lg btn-cta">Order Now</a>
				<p class="guarantee">30-Day Money-Back Guarantee</p>
			</div></div>
			<div class="col-12 col-md-7">
				<div class="jumbotron-product-image">
					<img src="<?php the_field( 'image_product' ); ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Product Intro Panel-->
<div class="product-intro-panel">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2><?php the_field( 'intro_title' ); ?></h2>
				<p class="tagline"><?php the_field( 'intro_text' ); ?></p>
			</div>
		</div>
		<div class="row">
			<?php while ( have_rows( 'product_features' ) ) : the_row();
			$title = get_sub_field( 'title' );
			$text = get_sub_field( 'content' );
			$image = get_sub_field( 'image' );
			?>
			<div class="col-12 col-md-4">
				<div class="product-info">
					<img src="<?php echo $image; ?>" alt="">
					<h3><?php echo $title; ?></h3>
					<p><?php echo $text; ?></p>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
	<div class="text-center">
		<a href="<?php the_field( 'buy' ); ?>" class="btn btn-primary btn-lg btn-cta">Order Now</a>
	</div>
</div></div>
<!-- Features Panel-->
<?php if ( have_rows( 'features' ) ): ?>
	<div class="panel-features">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center">Packed full of features</h2>
					<p class="tagline text-center"><?php the_field( 'features_intro' ); ?></p>
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
<!-- As Featured Panel-->
<?php if ( have_rows( 'featured_on' ) ): ?>
	<div class="panel-featured-on">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="sub-capital text-center">PROUDLY RECOMMENDED BY:</h2>
				</div>
			</div>
			<div class="row">
				<?php while ( have_rows( 'featured_on' ) ) : the_row();
				$image = get_sub_field( 'image' );
				$title = get_sub_field( 'title' );
				$url = get_sub_field( 'url' );
				?>
				<div class="col-4">
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
<!-- Bucket Panels-->
<?php if ( have_rows( 'bucket_detail' ) ): ?>
	<?php while ( have_rows( 'bucket_detail' ) ) : the_row();
	// vars
	$title = get_sub_field( 'title' );
	$content = get_sub_field( 'content' );
	$image = get_sub_field( 'image' );
	$link = get_sub_field( 'link' );
	?>
	<div class="bucket-detail">
		<div class="container">
			<div class="row  row-eq-height">
				<div class="col-sm-5">
					<div class="bucket-image">
						<img src="<?php echo $image; ?>" alt="">
					</div>		
				</div>
				<div class="col-sm-7">
					<div class="bucket-content">
						<h2><?php echo $title; ?></h2>
						<p  class="tagline"><?php echo $content; ?></p>
						<a href="<?php echo $link; ?>" >Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>

<!-- Open Source Panel -->
<div class="panel-open-source">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-9">
				<h2 class="text-center">Secure and Open Source</h2>
				<p class="tagline text-center">With over 50 years combined expreinece in cyber security and privacy protection, we are constantly striving to improve and refine our products.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<img class="hero-image" src="<?= get_template_directory_uri(); ?>/assets/images/app-screens-cropped.png">
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-6">
						<div class="media-body">
							<img src="<?= get_template_directory_uri(); ?>/assets/images/tick.png">
							<h5 class="mt-0">Open Source</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi omnis eum.</p>
						</div>
					</div>
					<div class="col-6">
						<div class="media-body">
							<img src="<?= get_template_directory_uri(); ?>/assets/images/tick.png">
							<h5 class="mt-0">No Log VPN</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi omnis eum.</p>
						</div>
					</div>
					<div class="col-6">
						<div class="media-body">
							<img src="<?= get_template_directory_uri(); ?>/assets/images/tick.png">
							<h5 class="mt-0">Auto Updates</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi omnis eum.</p>
						</div>
					</div>
					<div class="col-6">
						<div class="media-body">
							<img src="<?= get_template_directory_uri(); ?>/assets/images/tick.png">
							<h5 class="mt-0">Secure HTTPS</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi omnis eum.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Pricing Panel-->
<h2 class="text-center">Wide range of options</h2>
<p class="tagline text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<?php if ( have_rows( 'pricing_panel' ) ): ?>
	<div class="container-pricing">
		<div class="container">
			<div class="row">
				<?php while ( have_rows( 'pricing_panel' ) ) : the_row();
				$title = get_sub_field( 'title' );
				$content = get_sub_field( 'content' );
				$price = get_sub_field( 'price' );
				$discount = get_sub_field( 'discount' );
				$link = get_sub_field( 'link' );
				$css = get_sub_field( 'css_class' );
				?>
				<div class="col-12 col-lg-4">
					<div class="pricing-panel <?php echo $css; ?>">
						<span class="sale-tag">Sale!</span>
						<h1><?php echo $title; ?></h1>
						<p><?php echo $content; ?></p>
						<p class="price">€<?php echo $price; ?></p>
						<p class="discount">Was €<?php echo $discount; ?></p>
						<a href="<?php echo $link; ?>" class="btn btn-cta btn-primary">Order Now</a>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
</div>
<?php endif; ?>
<!-- Setup Steps -->
<div class="panel-wide">
	<h2 class="text-center">Super Easy Setup</h2>
	<p class="tagline text-center">Simply connect your phone, laptop or other device to any of our products over WiFi and that's it! </p>
	<?php if ( have_rows( 'setup_steps' ) ): ?>
	<div class="container">
		<div class="row">
			<?php while ( have_rows( 'setup_steps' ) ) : the_row();
			$image = get_sub_field( 'image' );
			$content = get_sub_field( 'content' );
			?>
			<div class="col-12 col-md-4">
				<div class="bucket-steps">
					<img src="<?php echo $image; ?>" alt="">
					<h3><?php echo $content; ?></h3>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
</div>
</div>
<?php endif; ?>
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