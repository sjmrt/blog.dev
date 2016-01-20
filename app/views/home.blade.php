@extends('layouts.master')
@section('top-script')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>SJMRT</title>

<link href="/css/bootstrap.min.css" rel="stylesheet">
<script src="/assets/js/ie-emulation-modes-warning.js"></script>
<link href="/css/home.css" rel="stylesheet">
<link rel="stylesheet" href="/css/style.css">

@stop

@section('content')

    <div class="container">
      <div class="jumbotron">
            <h1>Sarajane</h1>
        </div>
      <hr>
      <div class="row">
        <div class="col-lg-4">
          <div id="leftcat">
            <img class="img-circle" src="/img/kitten.png" alt="Generic placeholder image" width="140" height="140">
            <p></p>
            <p><a class="btn btn-default" href="{{{ action('HomeController@showResume') }}}" role="button">Resume »</a></p>
          </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div id="middlecat">
            <img class="img-circle" src="/img/kittencenter.png" alt="Generic placeholder image" width="140" height="140">
            <p></p>
            <p><a class="btn btn-default" href="{{{ action('HomeController@showPortfolio') }}}" role="button">Portfolio »</a></p>
          </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div id="rightcat">
            <img class="img-circle" src="/img/kittenright.png" alt="Generic placeholder image" width="140" height="140">
            <p></p>
            <p><a id="blogbtn" class="btn btn-default" href="{{{ action('PostsController@index') }}}" role="button">Blog »</a></p>
          </div>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
@stop
@section('bottom-script')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

@stop