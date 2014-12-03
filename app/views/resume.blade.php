@extends('_master')

@section ('resume')

<div class="container">
	<div class="col-sm-6">
<h2>&nbsp;</h2>
<h2>Add a resume</h2>






{{ Form::open(array('url' => '/resume')) }}

resume Name<br>
    {{ Form::text('name') }}<br><br>


resume url<br>
    {{ Form::text('url') }}<br><br>



resume text<br>
    {{ Form::textarea('resumetext') }}<br><br>



    {{ Form::submit('Submit') }}

{{ Form::close() }}


<?php
 echo '<a href="/">Cancel</a> <br>';

?>

</div>
</div>
@stop

