

@extends('_master')

@section ('applications')

<div class="container">
    <div class="col-sm-6">
<h2>&nbsp;</h2>
<h2>Add a completed application</h2>





{{ Form::open(array('url' => '/applications')) }}

    company<br>
    {{ Form::text('company', '', array('class'=>'form-control'))}} 


    role<br>
    {{ Form::text('role', '', array('class'=>'form-control'))}} 


    salary<br>
    {{ Form::text('salary', '', array('class'=>'form-control'))}} 

    Applied Date (enter as yyyy-mm-dd)<br>
    {{ Form::text('applyDate', '', array('class'=>'form-control'))}} 

    City<br>
    {{ Form::text('city', '', array('class'=>'form-control'))}} 

    Hiring Manager<br>
    {{ Form::text('hiringMgr', '', array('class'=>'form-control'))}} 

    Interview Date (enter as yyyy-mm-dd)<br>
    {{ Form::text('followupBy', '', array('class'=>'form-control'))}} 

    decision<br>
    {{ Form::text('decision', '', array('class'=>'form-control'))}} 

    rating<br>
    {{ Form::text('rating', '', array('class'=>'form-control'))}} 

    Resume used<br>
    {{ Form::text('resumeUsed', '', array('class'=>'form-control'))}} 

    how applied<br>
    {{ Form::text('howapplied', '', array('class'=>'form-control'))}} 

    rec number<br>
    {{ Form::text('recnumber', '', array('class'=>'form-control'))}} 

    website<br>
    {{ Form::text('website', '', array('class'=>'form-control'))}} 


     user name<br>
    {{ Form::text('username', '', array('class'=>'form-control'))}} 

     password<br>
  {{ Form::text('password', '', array('class'=>'form-control'))}} <br>


  {{ Form::submit('Submit', array('class'=>'btn btn-default'))}}   



  

{{ Form::close() }}

<?php
echo '<br><a class="btn btn-danger" href="/">Cancel</a>';


?>

</div>
</div>
@stop




