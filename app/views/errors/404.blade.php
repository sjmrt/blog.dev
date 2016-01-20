@extends ('layouts.master')
@section ('top-script')

@stop
@section ('content')

<div class="container">
	<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              		<span class="sr-only">Toggle navigation</span>
              		<span class="icon-bar"></span>
              		<span class="icon-bar"></span>
              		<span class="icon-bar"></span>
            	</button>
            	<a class="navbar-brand" href="#">Sarajane Stevens</a>
          	</div>
          	<div id="navbar" class="navbar-collapse collapse">
            	<ul class="nav navbar-nav navbar-right">
              		<li><a href="{{{action('HomeController@showHome')}}}">Home</a></li>
              		<li><a href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
              		<li><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
              		<li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
            	</ul>
          	</div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
	    <div class="jumbotron" id="fourohfour"><hr><h1>404 Not Found!</h1><hr></div>
	    
</div>

@stop