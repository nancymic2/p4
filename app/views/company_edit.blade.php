@extends('_master')

@section ('company_edit')





	{{ Form::model($company, ['method' => 'post', 'action' => ['CompanyController@postEdit', $company->id]]) }}
	
		<h2>Update: {{ $company->company }}</h2>
	
		<div class='form-group'>
		name
			{{ Form::text('company', null, ['class'=>'form-control']) }}
		</div>
		
	
		
		<div class='form-group'>
website
			{{ Form::text('website', null, ['class'=>'form-control']) }}
		</div>
		
		<div class='form-group'>
street
			{{ Form::text('street', null, ['class'=>'form-control']) }}
		</div>
		
		rating 1-7<br>
			{{ Form::text('rating', null, ['class'=>'form-control']) }}
			<br>

		
		{{ Form::submit('Save') }}
	
	{{ Form::close() }}

@stop
