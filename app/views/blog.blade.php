@extends('layouts.master')

@section('top-script')
    <title>Sj's Blog</title>
    <link rel="stylesheet" href="/css/style.css">
@stop

@section('content')
    <!-- Page Content -->
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
              <li class="active"><a href="{{{ action('PostsController@index') }}}">Blog<span class="sr-only">(current)</span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      <hr>
        <div class="row">
            <!-- Blog Post Content Column -->
            <div class="col-lg-8">
                <!-- Blog Post -->
                <!-- Preview Image -->
                <img class="img-responsive" src="/img/Louis_Wain_The_bachelor_party.jpg" alt="">
                <hr>

                @foreach($posts as $post )
                <a href="{{{ action('PostsController@show', $post->slug_title)}}}"> {{{ $post->title }}} </a></h1>
                
                <p class="lead">
                    by <a href="home.html">SJMRT</a>
                </p>

                <!-- Date/Time -->
                <span class="glyphicon glyphicon-time"></span><p>Post created {{{ $post->created_at->setTimeZone('America/Chicago')->diffForHumans() }}} </p>
               
                <p class="lead">{{{ $post->subtitle}}}</p>
                
                <p> {{{ $post->body }}} </p>

                <hr>
                @endforeach

                <hr>

                <div class="">
                    {{ $posts->links() }}
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Search the Borg</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Career</a>
                                </li>
                                <li><a href="#">Domesticity</a>
                                </li>
                                <li><a href="#">Star Trek</a>
                                </li>
                                <li><a href="#">Animals</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Cosmetics</a>
                                </li>
                                <li><a href="#">Transportation</a>
                                </li>
                                <li><a href="#">Hobbies</a>
                                </li>
                                <li><a href="#">Category 8</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <div class="well"><a href="{{{ action('PostsController@create') }}}"> Update your blog.</a>
                </div>
            </div>
        </div>


