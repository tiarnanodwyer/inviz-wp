<footer class="content-info">
  <div class="container">
<div class="row">


<div class="col-12 col-sm-6">




                    <div class="social-icons">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        <i class="fa fa-twitter-square" aria-hidden="true"></i>
                        <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                    </div>
                    <br>
                    <p>Sign up for our Newsletter</p>
                    <form class="form-inline">
                        <div class="form-group">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                    


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
