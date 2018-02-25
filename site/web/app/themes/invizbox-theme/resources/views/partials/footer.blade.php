<footer class="content-info">
  <div class="container">
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
    <hr>
    <div class="row">
      <div class="col-12 col-sm-6">
        <?php echo do_shortcode( '[contact-form-7 id="101" title="Newsletter Form"]' ); ?>
      </div>
      <div class="col-12 col-sm-6">
        <div class="social-icons text-right">
          <img class="style-svg" alt="alt-text" src="http://invizbox.test/app/uploads/2017/12/facebook-app-logo.svg" />
          <img class="style-svg" alt="alt-text" src="http://invizbox.test/app/uploads/2017/12/google-plus-logo-on-black-background.svg" />
          <img class="style-svg" alt="alt-text" src="http://invizbox.test/app/uploads/2017/12/twitter-logo-on-black-background.svg" />
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-12 col-sm-6">© 2017 InvizBox Ltd.</div>
      <div class="col-12 col-sm-6 text-right">Terms and Conditions</div>
    </div>
  </div>
</footer>