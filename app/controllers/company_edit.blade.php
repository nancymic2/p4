@extends('_master')

@section ('editcompany')



@section('content')

	{{ Form::model($company, ['method' => 'post', 'action' => ['CompanyController@postEdit', $company->id]]) }}
	
		<h2>Update: {{ $company->company }}</h2>
	
		<div class='form-group'>
		name
			{{ Form::text('company') }}
		</div>
		
	
		
		<div class='form-group'>
website
			{{ Form::text('website') }}
		</div>
		
		<div class='form-group'>
street
			{{ Form::text('street') }}
		</div>
		

		
		{{ Form::submit('Save') }}
	
	{{ Form::close() }}

@stop
