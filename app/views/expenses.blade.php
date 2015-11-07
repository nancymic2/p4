@extends('_master')

@section ('expeses')

<div class="container">
	<div class="col-sm-6">
<h2>&nbsp;</h2>
<h2>Add expenses</h2>







{{ Form::open(array('url' => '/expenses')) }}
<br>

company_id<br>
    {{ Form::text('gas', '', array('class'=>'form-control'))}} 
application_id<br>
    {{ Form::text('gas', '', array('class'=>'form-control'))}} 

gas<br>
    {{ Form::text('gas', '', array('class'=>'form-control'))}} 

airfare<br>
    {{ Form::text('airfare', '', array('class'=>'form-control'))}} 

train<br>
    {{ Form::text('train', '', array('class'=>'form-control'))}} 
hotel<br>
    {{ Form::text('train', '', array('class'=>'form-control'))}} 
meals<br>
    {{ Form::text('train', '', array('class'=>'form-control'))}}
stamps<br>
    {{ Form::text('train', '', array('class'=>'form-control'))}}
ink<br>
    {{ Form::text('train', '', array('class'=>'form-control'))}}
paper<br>
    {{ Form::text('train', '', array('class'=>'form-control'))}}
hardware<br>
    {{ Form::text('train', '', array('class'=>'form-control'))}}
portfolio<br>
    {{ Form::text('train', '', array('class'=>'form-control'))}}
phone<br>
    {{ Form::text('train', '', array('class'=>'form-control'))}}
clothing<br>
    {{ Form::text('train', '', array('class'=>'form-control'))}}
entertainment<br>
    {{ Form::text('train', '', array('class'=>'form-control'))}}
comments<br>
    {{ Form::textarea('train', '', array('class'=>'form-control'))}}


<br>
{{ Form::submit('Submit', array('class'=>'btn btn-default'))}}         

{{ Form::close() }}


<?php
echo '<br><a class="btn btn-danger" href="/expenses">Cancel</a>';

?>

</div>
</div>
@stop

