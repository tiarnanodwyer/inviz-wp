<footer>
  <div class="container">
    <div class="d-none d-sm-block">
          <div class="row">
      <div class="col-12 col-sm-3">
        <h5>Products</h5>
        @if (has_nav_menu('secondary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'secondary_navigation']) !!}
        @endif
      </div>
      <div class="col-12 col-sm-3">
        <h5>Company</h5>
        @if (has_nav_menu('tertiary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'tertiary_navigation']) !!}
        @endif
      </div>
      <div class="col-12 col-sm-3">
        <h5>Resources</h5>
        @if (has_nav_menu('quaternary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'quaternary_navigation']) !!}
        @endif
      </div>
    </div>
    </div>   

    <div class="social">
        <div class="row align-items-center">
        <div class="col-md-4">
          <h3>Connect with us</h3>
          <p class="tagline">Get the latest news and details on any firmware updates. We don't share any contact inforamtion. </p>
        </div>
        <div class="col-md-5">
          <?php echo do_shortcode( '[contact-form-7 id="500" title="Newsletter Form"]' ); ?>
        </div>
        <div class="col-md-3">
          <div class="social-icons">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/social-twitter.png">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/social-google.png">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/social-facebook.png">
          </div>
        </div>
      </div>
    </div>
    <div class="footer-base">
      <div class="row">
        <div class="col-6">© 2017 InvizBox Ltd.</div>
        <div class="col-6 text-right">Terms and Conditions</div>
      </div>
    </div>
  </div>
</footer>