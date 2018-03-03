<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
    @include('partials.header')
    <div class="banner-refund">
  <div class="row">
    <div class="col-4 text-center"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-woo-shield.png">100% Secure</div>
    <div class="col-4 text-center"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-woo-shipping.png">Free Shipping</div>
    <div class="col-4"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-woo-calendar.png">30-Day Money Back Guarantee</div>
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
