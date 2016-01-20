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
                <small>projects I have built</small>
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <img class="img-responsive" src="../../img/jemhadar.png" alt="">
        </div>

        <div class="col-md-4">
            <h3>Whack-A-Jem'Hadar</h3>
            <p>A Star Trek based Whack-A-Mole game.</p>
            <h3>Built With</h3>
            <ul>
                <li>jQuery</li>
                <li>HTML/CSS</li>
                <li>https://sjmrt.github.io</li>
            </ul>
        </div>

    </div>

    <div class="row">

        <div class="col-lg-12">
            <h3 class="page-header">Other projects</h3>
        </div>

        <div class="col-sm-3 col-xs-6">
            <a href="#">
                <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
            </a>
        </div>

        <div class="col-sm-3 col-xs-6">
            <a href="#">
                <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
            </a>
        </div>

        <div class="col-sm-3 col-xs-6">
            <a href="#">
                <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
            </a>
        </div>

        <div class="col-sm-3 col-xs-6">
            <a href="#">
                <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
            </a>
        </div>
    </div>
</div>

@stop

@section('bottom-script')

@stop