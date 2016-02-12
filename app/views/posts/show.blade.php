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
              <li><a href="{{{ action('HomeController@showHome') }}}">Home</a></li>
              <li><a href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
              <li><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
              <li class="active"><a href="{{{ action('PostsController@index') }}}">Blog<span class="sr-only">(current)</span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
        <div class="row">
            <div class="col-lg-8">
                <img class="img-responsive" src="/img/Louis_Wain_The_bachelor_party.jpg" alt="">

                <h1>{{{ $post->title }}}</h1>
                
                <p class="lead">
                    by <a href="{{{ action('HomeController@showHome') }}}">SJMRT</a>
                </p>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> {{{$post->created_at}}} </p>
               
				<p class="lead">{{{$post->subtitle}}}</p>
                <div>
                @foreach($post->images as $image)
                    <img src="{{{ $image->img_path }}}">
                    <hr>
                @endforeach
                </div>
				<p> {{{ $post->body }}} </p>
                <hr>
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
                @if(Auth::check())
                <div class="well">
                    <a href="{{{ action('PostsController@create') }}}"> Update your blog.</a>
                    <script src="//api.filepicker.io/v2/filepicker.js" type="text/javascript"></script>
                    <button class="btn-success" id="filestack">Upload a photo</button>
                    {{ Form::open(array('action' => array('PostsController@edit', $post->id), 'method' => 'GET')) }}                    
                    <button class="btn-warning">Edit Post</button>
                    {{Form::close()}}
                    {{Form::open(array('action'=> array('PostsController@destroy', $post->id), 'method' => 'DELETE'))}}
                    <button class="btn-danger">Delete Post</button>
                    {{Form::close()}}
                </div>
                @endif
            </div>
        </div>
@stop
@section('bottom-script')
<script type="text/javascript" src="https://api.filestackapi.com/filestack.js"></script>    
    <script>
        
        filepicker.setKey("A7sKrzoQxSfm5fONKpae9z");  
        
        // create function for the button
        function upload(){ 
            
            filepicker.pick(
                {
                    mimetype: 'image/*', 
                    container: 'modal', 
                    services: ['COMPUTER', 'INSTAGRAM', 'FACEBOOK', 'FLICKR', 'PICASA', 'IMAGE_SEARCH'], 
                    imageDim: [610, 440]
                }, 
                function(Blob) {
                    console.log(Blob); 
                    console.log(Blob.url); 
                    
                    $.ajax("/upload", {
                        type: "POST",
                        data: {
                            post_id: {{{ $post->id }}},
                            img_path: Blob.url
                        }
                    });
                    
                }
            )
        }; 

        $('#filestack').on('click', upload);

        
    </script> 
@stop
