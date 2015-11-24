@extends('_master')

@section ('resume')

<div class="container">
	<div class="col-sm-6">
<h2>&nbsp;</h2>
<h2>Add expenses</h2>







{{ Form::open(array('url' => '/resume')) }}
<br>
resume Name<br>
    {{ Form::text('name', '', array('class'=>'form-control'))}} 


resume url<br>
    {{ Form::text('url', '', array('class'=>'form-control'))}} 



resume text<br>
    {{ Form::textarea('resumetext', '', array('class'=>'form-control'))}} <br>



    {{ Form::submit('Submit', array('class'=>'btn btn-default'))}}         

{{ Form::close() }}


<br><a class="btn btn-danger" onclick="window.history.back()">Cancel</a>

</div>
</div>
@stop

