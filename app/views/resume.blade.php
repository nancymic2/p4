@extends('_master')

@section ('resume')
@if(Session::has('succes'))
<div class="alert alert-success" style="z-index: 10; position: absolute; top: 500px; left: 400px; padding: 25px; background-color: #ffff33;">{{ Session::get('success') }}</div>
@endif

                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
                        <script src="jquery.knob.js"></script>
                <link href="/css/layout.css" rel="stylesheet">
                <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" type="text/css" media="all" />
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js" type="text/javascript"></script>
                <script src="//code.jquery.com/jquery-1.9.1.js"></script> 
                <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                    $(document).ready(function(){
                    $('input.date').datepicker({dateFormat: 'yy-mm-dd'});
                    })
                </script>

<div class="container">
    <div class="col-sm-6">
<h2>&nbsp;</h2>
<h2>Add a resume</h2>
<p>Add resume text to remind you of your resume, or<br>
	add a URL to your resume on Google docs or Monster<br>
	or wheverever it is saved</p>






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


<?php
echo '<br><a class="btn btn-danger" href="/">Cancel</a>';


?>



</div>
</div>
@stop