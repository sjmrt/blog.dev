@extends('layouts.master')

@section('top-script')
    <title>Sj's Portfolio</title>
    <link href="../../css/portfolio-item.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
@stop

@section('content')

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
                    <li class="active"><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio<span class="sr-only">(current)</span></a></li>
                    <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">My Portfolio
                    <small>Projects I have built</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <!-- Project One -->
        <div class="row">
            <div class="col-md-6">
                <a href="#">
                    <img class="img-responsive" src="../../img/jemhadar.png" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <h3>Whack-A-Jem'hadar</h3>
                <h4>A Star Trek based Whack-A-Mole game.</h4>
                <hr>
                <p>Destroy the Dominion in this JavaScript, jQuery, and HTML/CSS game.</p>
                <p>View the Code: https://github.com/sjmrt/Whack-A-Mole Play the game: https://sjmrt.github.io/</p>
                {{-- <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a> --}}
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-6">
                <a href="#">
                    <img class="img-responsive" src="img/kriegerslist.png" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <h3>Krieger's List</h3>
                <h4>Craigslist Clone</h4>
                <hr>
                <p>List and sell your stuff with Krieger! Built with PHP, JavaScript, jQuery, MySQL, and HTML/CSS</p>
                <p>View the Code: https://github.com/adlister-codeup</p>
                {{-- <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a> --}}
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
        <div class="row">
            <div class="col-md-6">
                <a href="#">
                    <img class="img-responsive" src="img/simplesj.png" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <h3>Simple Simon</h3>
                <h4>Revamp of the classic, with cats!</h4>
                <hr>
                <p>A jQuery, HTML/CSS game to test your memory.</p>
                <p>View the Code: https://github.com/sjmrt/Simple-SJ
                {{-- <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a> --}}
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Four -->
        <div class="row">

            <div class="col-md-6">
                <a href="#">
                    <img class="img-responsive" src="img/myblog.png" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <h3>Laravel blog</h3>
                <h4>A personal blog page</h4>
                <hr>
                <p>Blog, portfolio, and resume built using Laravel, PHP, MySQL, JavaScript, jQuery and Twitter Bootstrap. Developed in a Vagrant environment, includes user logins, blog post creation, viewing, and editing,  image upload, and search functionality</p>
                <p>View the Code: https://github.com/sjmrt/blog.dev</p>
                {{-- <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a> --}}
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>