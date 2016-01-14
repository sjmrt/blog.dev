@extends ('layouts.master')

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
              <li><a href="./">Home</a></li>
              <li><a href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
              <li><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
              <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

	{{ Form::open(array('action' => 'HomeController@postLogin')) }}
	<h1>Login</h2>
	<div class="form-group">
		{{ $errors->first('email') }}
    	{{ $errors->first('password') }}
    </div>
	<div class="form-group">
		{{ Form::label('email', 'Email Address') }}
		{{ Form::text('email', null, array('class' => 'form-control')) }}
	</div>
	<div class = "form-group">
		{{ Form::label('password', 'Password') }}
		{{ Form::password('password', array('class' => 'form-control')) }}
	</div>
	<button class="btn btn-default" id="post">Login</button>

	{{ Form::close() }}
</div>


@stop


