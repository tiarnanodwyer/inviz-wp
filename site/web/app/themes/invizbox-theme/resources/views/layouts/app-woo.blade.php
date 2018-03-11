<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
    @include('partials.header')
    <div class="banner-refund">
<div class="container">
    <div class="row align-items-center">
    <div class="col-4 text-center"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-woo-shield.png"><p>100% Secure</p></div>
    <div class="col-4 text-center"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-woo-shipping.png"><p>Free Shipping</p></div>
    <div class="col-4 text-center"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-woo-calendar.png"><p>30-Day Guarantee</p></div>
  </div>
</div>
</div>
    <div class="wrap container" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>
