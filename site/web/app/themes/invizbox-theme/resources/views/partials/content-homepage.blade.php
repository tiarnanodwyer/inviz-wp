<section class="jumbotron" style="background-image: url(<?php the_field( 'jumbotron' ); ?>);">
	<div class="container">
		<div class="jumbotron-detail">
			<h1 class="jumbotron-heading"><?php the_field( 'hero_title' ); ?></h1>
			<p class="lead text-muted"><?php the_field( 'hero_tagline' ); ?></p>
			<a href="" class="btn btn-secondary">Learn More</a>
			<a href="" class="btn btn-primary">Order Now</a>
		</div>
	</div>
</section>

	<span class="ip-address" class="jumbotron-heading"><?php the_field( 'ip' ); ?></span>

<!-- Product Panel-->
<div class="container products-panel-holder">
	<div class="row justify-content-md-center">
		<div class="col-sm-12 text-center">
			<h2><?php the_field( 'intro_title' ); ?></h2>
			<p class="tagline"><?php the_field( 'intro_text' ); ?></p>
		</div>
	</div>
	<!-- Products Panel-->
	<div class="row">
		<?php if ( have_rows( 'products_panel' ) ): ?>
		<?php while ( have_rows( 'products_panel' ) ) : the_row();
		$title = get_sub_field( 'product_title' );
		$tag = get_sub_field( 'product_tag' );
		$text = get_sub_field( 'product_copy' );
		$image = get_sub_field( 'product_image' );
		$learn = get_sub_field( 'learn_more' );
		$buy = get_sub_field( 'buy' );
		?>
		<div class="col-sm-6">
			<div class="products-panel">
				
				<img src="<?php echo $image; ?>" alt="">
				<h5><?php echo $title; ?></h5>
				<!-- <p class="product-tag"><?php echo $tag; ?></p> -->
				<p><?php echo $text; ?></p>
				<a href="<?php echo $learn; ?>" class="btn btn-secondary">Learn More</a>
				<a href="<?php echo $learn; ?>" class="btn btn-primary">Order Now</a>
			</div>
		</div>
	<?php endwhile; ?>

<?php endif; ?>
</div>
</div>
<!-- Features Panel-->
<?php if ( have_rows( 'features' ) ): ?>
	<div class="panel-wide">
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
				<div class="col-sm-6 col-md-4">
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
					<h2 class="sub text-center">We've had some great support...</h2>
				</div>
			</div>
			<div class="row">
				<?php while ( have_rows( 'featured_on' ) ) : the_row();
				$image = get_sub_field( 'image' );
				$title = get_sub_field( 'title' );
				$url = get_sub_field( 'url' );
				?>
				<div class="col-sm-4">
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
				<div class="col-sm-6 bucket-image">
					<img src="<?php echo $image; ?>" alt="">
				</div>
				<div class="col-sm-6 bucket-content">
					<h2><?php echo $title; ?></h2>
					<p  class="tagline"><?php echo $content; ?></p>
					<a href="$link" class="btn btn-default">Learn More</a>
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
			<div class="col-sm-6">

			<img src="<?= get_template_directory_uri(); ?>/assets/images/app-screens-cropped.png">

		</div>
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-6">

						<div class="media-body">
							<img src="<?= get_template_directory_uri(); ?>/assets/images/tick.png">
							<h5 class="mt-0">Open Source</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi omnis eum.</p>
						</div>



					</div>
					<div class="col-sm-6">

						<div class="media-body">
							<img src="<?= get_template_directory_uri(); ?>/assets/images/tick.png">
							<h5 class="mt-0">No Log VPN</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi omnis eum.</p>
						</div>



					</div>
					<div class="col-sm-6">

						<div class="media-body">
							<img src="<?= get_template_directory_uri(); ?>/assets/images/tick.png">
							<h5 class="mt-0">Auto Updates</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi omnis eum.</p>
						</div>



					</div>
					<div class="col-sm-6">

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


<!-- Setup Steps -->
<div class="panel-wide">
	<h2 class="text-center">Super Easy Setup</h2>
	<p class="tagline text-center">Simply connect your phone, laptop or other device to any of our products over WiFi and thatâ€™s it! </p>
	<?php if ( have_rows( 'setup_steps' ) ): ?>
	<div class="container">
		<div class="row">
			<?php while ( have_rows( 'setup_steps' ) ) : the_row();
			$image = get_sub_field( 'image' );
			$title = get_sub_field( 'title' );
			$content = get_sub_field( 'content' );
			$badge = get_sub_field( 'badge' );
			?>
			<div class="col-12 col-sm-4">
				<div class="bucket bucket-steps">
					<h5><span class="badge badge-default"><?php echo $badge; ?></span></h5>
					<img src="<?php echo $image; ?>" alt="" class="rounded-circle">
					<h3><?php echo $title; ?></h3>
					<p><?php echo $content; ?></p>
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
				<?php do_action( 'woothemes_testimonials', array( 'limit' => 1, 'display_author' => false, 'category' => 'invizbox-pro' )  ); ?>
			</div>
		</div>
	</div>
</div>
