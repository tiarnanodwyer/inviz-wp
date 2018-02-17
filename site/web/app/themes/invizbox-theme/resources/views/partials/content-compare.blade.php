<section class="jumbotron">
        <div class="container">
            <div class="jumbotron-detail-product">
                <h1 class="jumbotron-heading">Which InvizBox?</h1>
                <p class="lead text-muted">At home or on the move, we've got the solution for you</p>

            </div>
        </div>
    </section>

<!-- Compare Panel-->
<?php if ( have_rows( 'compare_product' ) ): ?>
	<div class="pricing-panel-product"><div class="container">
			<div class="row">
				<?php while ( have_rows( 'compare_product' ) ) : the_row();
				$image = get_sub_field( 'image' );
				$title = get_sub_field( 'title' );
				$content = get_sub_field( 'content' );
				$price = get_sub_field( 'price' );
				$discount = get_sub_field( 'discount' );
				$table = get_sub_field( 'table' );
				?>
<div class="col-md-6">
<div class="pricing-panel ">
    <span class="sale-tag">Sale!</span>
      <img src="<?php echo $image; ?>" alt="">
    <h1><?php echo $title; ?></h1>
    <p><?php echo $content; ?></p>
    <p class="price"><?php echo $price; ?></p>
    <p class="discount"><?php echo $discount; ?></p>
<a href="store-invizbox-go.html" class="btn btn-cta-normal">Order Now</a>
<a href="invizbox-go.html" class="btn btn-secondary">Learn More</a>
<div class="bullets"><?php echo $table; ?></div>
<hr class="small hidden-sm-up">
</div>

                </div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
	</div>
<?php endif; ?>





<!-- Features Panel-->
<?php if ( have_rows( 'features', 203 ) ): ?>
<div class="panel-wide">
		<div class="container">
		<div class="row">
				<div class="col-12">
					<h2 class="sub text-center">All our Devices are packed full of features</h2>
				</div>
			</div>
			<div class="row">
				<?php while ( have_rows( 'features', 203 ) ) : the_row();
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




