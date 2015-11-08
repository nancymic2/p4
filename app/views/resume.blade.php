@extends('_master')

@section ('resume')

<div class="container">
	<div class="col-sm-6">
<h2>&nbsp;</h2>
<h2>Add a resume</h2>
<p>Add resume text to remind you of your resume, or<br>
	add a URL to your resume on Google docs or Monster<br>
	or wheverever it is saved</p>

<!--{{ Form::open(array('url' => '/resume')) }}  -->

{{ Form::open(['route'=>'/resume', 'files'=>true]) }}
<br>
resume Name<br>
    {{ Form::text('name', '', array('class'=>'form-control'))}} 


resume url<br>
    {{ Form::text('url', '', array('class'=>'form-control'))}} 



resume text<br>
    {{ Form::textarea('resumetext', '', array('class'=>'form-control'))}} <br>



    {{ Form::submit('Submit', array('class'=>'btn btn-default'))}}         

{{ Form::close() }}


<?php
echo '<br><a class="btn btn-danger" href="/">Cancel</a>';

?>

</div>
</div>
@stop

