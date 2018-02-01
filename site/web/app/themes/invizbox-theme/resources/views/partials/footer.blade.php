<footer class="content-info">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-6">
        <div class="social-icons">
          <img class="style-svg" alt="alt-text" src="http://invizbox.test/app/uploads/2017/12/facebook-app-logo.svg" />
          <img class="style-svg" alt="alt-text" src="http://invizbox.test/app/uploads/2017/12/google-plus-logo-on-black-background.svg" />
          <img class="style-svg" alt="alt-text" src="http://invizbox.test/app/uploads/2017/12/twitter-logo-on-black-background.svg" />
        </div>
        <br>
<?php echo do_shortcode( '[contact-form-7 id="101" title="Newsletter Form"]' ); ?>
      </div>
      <div class="col-12 col-sm-2">
        <h5>Products</h5>
        @if (has_nav_menu('secondary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'secondary_navigation']) !!}
        @endif
      </div>
      <div class="col-12 col-sm-2">
        <h5>Company</h5>
        @if (has_nav_menu('secondary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'secondary_navigation']) !!}
        @endif
      </div>
      <div class="col-12 col-sm-2">
        <h5>Resources</h5>
        @if (has_nav_menu('secondary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'secondary_navigation']) !!}
        @endif
      </div>
    </div>
  </div>
</footer>