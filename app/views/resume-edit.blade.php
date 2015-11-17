
@extends('_master')

@section ('resume-edit')


<div class="container">
<div class="col-sm-6">


<h3>View or Edit Resume</h3>
<br>
 {{ Form::model($resume, array('route' => 'resume.edit', $resume->id)) }}    


    Resume link<br>
    {{ Form::text('url')}} 
<br>
    Resume  name<br>
    {{ Form::text('name')}} 
<br>
    notes<br>
    {{ Form::textarea('resumetext')}} 


  <br><br>
 {{ Form::hidden('id', $resume->id) }}  <!-- just added -->
        {{ Form::submit('Update resume') }}
<br><br>
    {{ Form::close() }}



<br><a class="btn btn-danger" onclick="window.history.back()">Cancel</a>
<!-- note use email as the type vs text if you want validation -->
@stop