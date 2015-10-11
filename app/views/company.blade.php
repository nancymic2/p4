@extends('_master')

@section ('company')

<div class="container">
	<div class="col-sm-6">
<h2>&nbsp;</h2>
<h2>Add a Company</h2>
<p>Add a company</p>






{{ Form::open(array('url' => '/company')) }}

company Name<br>
    {{ Form::text('company', '', array('class'=>'form-control'))}} 


company website<br>
    {{ Form::text('website', '', array('class'=>'form-control'))}} 



company street<br>
    {{ Form::text('street', '', array('class'=>'form-control'))}} <br>



    {{ Form::submit('Submit', array('class'=>'btn btn-default'))}}         

{{ Form::close() }}


<?php
echo '<br><a class="btn btn-danger" href="/">Cancel</a>';

?>

</div>
</div>
@stop

