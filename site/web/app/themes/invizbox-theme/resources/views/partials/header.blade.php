<nav class="navbar navbar-expand-md fixed-top navbar-dark">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="navbar-brand" href="{{ home_url('/') }}">
      <span class="sr-only">
        {{ get_bloginfo('name', 'display') }}
      </span>
    </a>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
     @if (has_nav_menu('primary_navigation'))
     {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => false, 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'navbar-nav ml-auto']) !!}
     @endif
   </div>
 </div>
</nav>

