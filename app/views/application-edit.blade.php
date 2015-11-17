
@extends('_master')

@section ('application-edit')


<div class="container">
<div class="col-sm-6">
<h2>&nbsp;</h2>


<h3>View or Edit Appication</h3>
<br>

 {{ Form::model($application, array('route' => 'application.edit', $application->id, $application->company)) }}    

<br>
{{ Form::select('company_id', $company_lists) }} 
<br>
    company Name<br>
    {{ Form::text('company')}} 
<br>
    role<br>
    {{ Form::text('role')}} 
<br>
    job name<br>
    {{ Form::text('recnumber')}} 
<br>
    hire manager<br>
    {{ Form::text('hiringMgr')}} 

  <br><br>
 {{ Form::hidden('id', $application->id) }}  <!-- just added -->
        {{ Form::submit('Update job') }}
<br><br>
    {{ Form::close() }}



<br><a class="btn btn-danger" onclick="window.history.back()">Cancel</a>
<!-- note use email as the type vs text if you want validation -->
@stop