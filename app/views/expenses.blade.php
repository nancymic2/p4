@extends('_master')

@section ('expenses')

<div class="container">
	<div class="col-sm-6">
<h2>&nbsp;</h2>
<h2>Add expenses</h2>







{{ Form::open(array('url' => '/expenses')) }}
<br>

company_id<br>
    {{ Form::integer('company_id', '', array('class'=>'form-control'))}} 
application_id<br>
    {{ Form::integer('application_id', '', array('class'=>'form-control'))}} 

gas<br>
    {{ Form::integer('gas', '', array('class'=>'form-control'))}} 

airfare<br>
    {{ Form::integer('airfare', '', array('class'=>'form-control'))}} 

train<br>
    {{ Form::integer('train', '', array('class'=>'form-control'))}} 
hotel<br>
    {{ Form::integer('hotel', '', array('class'=>'form-control'))}} 
meals<br>
    {{ Form::integer('meals', '', array('class'=>'form-control'))}}
stamps<br>
    {{ Form::integer('stamps', '', array('class'=>'form-control'))}}
ink<br>
    {{ Form::integer('ink', '', array('class'=>'form-control'))}}
paper<br>
    {{ Form::integer('paper', '', array('class'=>'form-control'))}}
hardware<br>
    {{ Form::integer('hardware', '', array('class'=>'form-control'))}}
portfolio<br>
    {{ Form::integer('portfolio', '', array('class'=>'form-control'))}}
phone<br>
    {{ Form::integer('phone', '', array('class'=>'form-control'))}}
clothing<br>
    {{ Form::integer('clothing', '', array('class'=>'form-control'))}}
entertainment<br>
    {{ Form::integer('entertainment', '', array('class'=>'form-control'))}}
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

