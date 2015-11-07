@extends('_master')

@section ('expenses')

<div class="container">
	<div class="col-sm-6">
<h2>&nbsp;</h2>
<h2>Add expenses</h2>







{{ Form::open(array('url' => '/expenses')) }}
<br>

company_id<br>
    {{ Form::int('company_id', '', array('class'=>'form-control'))}} 
application_id<br>
    {{ Form::int('application_id', '', array('class'=>'form-control'))}} 

gas<br>
    {{ Form::int('gas', '', array('class'=>'form-control'))}} 

airfare<br>
    {{ Form::int('airfare', '', array('class'=>'form-control'))}} 

train<br>
    {{ Form::int('train', '', array('class'=>'form-control'))}} 
hotel<br>
    {{ Form::int('hotel', '', array('class'=>'form-control'))}} 
meals<br>
    {{ Form::int('meals', '', array('class'=>'form-control'))}}
stamps<br>
    {{ Form::int('stamps', '', array('class'=>'form-control'))}}
ink<br>
    {{ Form::int('ink', '', array('class'=>'form-control'))}}
paper<br>
    {{ Form::int('paper', '', array('class'=>'form-control'))}}
hardware<br>
    {{ Form::int('hardware', '', array('class'=>'form-control'))}}
portfolio<br>
    {{ Form::int('portfolio', '', array('class'=>'form-control'))}}
phone<br>
    {{ Form::int('phone', '', array('class'=>'form-control'))}}
clothing<br>
    {{ Form::int('clothing', '', array('class'=>'form-control'))}}
entertainment<br>
    {{ Form::int('entertainment', '', array('class'=>'form-control'))}}
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

