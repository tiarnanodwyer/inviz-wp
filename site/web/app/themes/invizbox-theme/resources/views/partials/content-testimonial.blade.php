


<!-- Features Panel-->
<?php if ( have_rows( 'testimonial' ) ): ?>
	<div class="container">

			<div class="row">
				<?php while ( have_rows( 'testimonial' ) ) : the_row();
			$content = get_sub_field( 'content' );
			$details = get_sub_field( 'details' );
			$image = get_sub_field( 'image' );
			$link = get_sub_field( 'link' );
				?>
			<div class="col-sm-6" role="presentation">

				<div class="testimonial-panel">
					<a href="<?php echo $link; ?>">
						<img src="<?php echo $image; ?>" alt="">
						<p><?php echo $content; ?></p>
						<p><?php echo $details; ?></p>
					</a>
				</div>
			</div>
				<?php endwhile; ?>
			</div>
		</div>
<?php endif; ?>