 @extends('_master')

@section ('upload')

	{{ Form::open(array('action' => 'HomeController@upload', 'files'=>true)) }}
	{{ Form::label('image', 'Upload Image')}}
	{{ Form::file('image') }}
	{{ Form::submit('Submit') }}
   	{{ Form::close() }}

@stop