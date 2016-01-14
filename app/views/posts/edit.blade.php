@extends('layouts.master')
@section('top-script')
<link rel="stylesheet" href="/css/style.css">
@stop
@section('content')
<div class="container" >
	<h3>Edit A Blog Post</h3>
{{ Form::open(array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}	  
<div class="form-group">
	    {{ $errors->first('title', '<span class="help-block">:message</span>') }}
	    {{ Form::label('title', 'Title') }}
		{{ Form::text('title', $post->title, ['class' => 'form-control'] ) }}
	  </div>
	  <div class="form-group">
	    {{ $errors->first('subtitle', '<span class="help-block">:message</span>') }}
	    {{ Form::label('subtitle', 'subtitle') }}
		{{ Form::text('subtitle', $post->subtitle, ['class' => 'form-control'] ) }}
	  </div>
	  <div class="form-group">
	    {{ $errors->first('body', '<span class="help-block">:message</span>') }}
	    {{ Form::label('body', 'Body') }}
		{{ Form::textarea('body', $post->body, ['class' => 'form-control'] ) }}
	  </div>
	  <input name="user_id" type="hidden" value="1">
	  <button type="submit" class="btn btn-default">Submit</button>
</div>
{{ Form::close() }}
@stop

