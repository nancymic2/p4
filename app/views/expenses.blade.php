@extends('_master')

@section ('expenses')

<div class="container">
	<div class="col-sm-6">
<h2>&nbsp;</h2>
<h2>Add expenses</h2>







{{ Form::open(array('url' => '/expenses')) }}
<br>
    <!--{{ Form::select('company_id', $company_lists) }} commented ut 11-7 105 pm-->
company_id<br>
   {{ Form::text('company_id', '', array('class'=>'form-control'))}} 
application_id<br>
    {{ Form::text('application_id', '', array('class'=>'form-control'))}} 

gas<br>
    {{ Form::text('gas', '', array('class'=>'form-control'))}} 

airfare<br>
    {{ Form::text('airfare', '', array('class'=>'form-control'))}} 

train<br>
    {{ Form::text('train', '', array('class'=>'form-control'))}} 
hotel<br>
    {{ Form::text('hotel', '', array('class'=>'form-control'))}} 
meals<br>
    {{ Form::text('meals', '', array('class'=>'form-control'))}}
stamps<br>
    {{ Form::text('stamps', '', array('class'=>'form-control'))}}
ink<br>
    {{ Form::text('ink', '', array('class'=>'form-control'))}}
paper<br>
    {{ Form::text('paper', '', array('class'=>'form-control'))}}
hardware<br>
    {{ Form::text('hardware', '', array('class'=>'form-control'))}}
portfolio<br>
    {{ Form::text('portfolio', '', array('class'=>'form-control'))}}
phone<br>
    {{ Form::text('phone', '', array('class'=>'form-control'))}}
clothing<br>
    {{ Form::text('clothing', '', array('class'=>'form-control'))}}
entertainment<br>
    {{ Form::text('entertainment', '', array('class'=>'form-control'))}}
comments<br>
    {{ Form::textarea('comments', '', array('class'=>'form-control'))}}


<br>
{{ Form::submit('Submit', array('class'=>'btn btn-default'))}}         

{{ Form::close() }}


<?php
echo '<br><a class="btn btn-danger" href="/expenses">Cancel</a>';

?>

</div>
</div>
@stop
