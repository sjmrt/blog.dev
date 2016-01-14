@extends('layouts.master')

@section('top-script')
    <title>Sj's Blog</title>
    <link rel="stylesheet" href="/css/style.css">
@stop

@section('content')
<div class="container">

	@foreach($posts as $post )
		<h1><a href="{{{ action('PostsController@show', $post->id)}}}"> {{{ $post->title }}} </a></h1>
		<p> {{{ $post->body }}} </p>
	@endforeach

{{ $posts->links() }}

</div>

@stop