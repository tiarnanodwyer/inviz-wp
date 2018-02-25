
 <nav class="navbar navbar-expand-md fixed-top navbar-dark">
 	<a class="navbar-brand" href="{{ home_url('/') }}">
 		<span class="sr-only">
 			{{ get_bloginfo('name', 'display') }}
 		</span>
 	</a>
<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
 data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
 aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>

<div class="navbar-collapse collapse" id="navbarSupportedContent">
 @if (has_nav_menu('primary_navigation'))
 {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => false, 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'navbar-nav ml-auto']) !!}
 @endif
 </div>
 </nav>
