@extends('_master')

@section ('recruiter')

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
<h2>Add a recruiter or contact</h2>


{{ Form::open(array('url' => '/recruiter')) }}
<br>

Name<br>
    {{ Form::text('recruiter_name', '', array('class'=>'form-control'))}} 
<!--<br>
Address<br>
    {{ Form::text('recruiter_address', '', array('class'=>'form-control'))}} 
<br>
Phone<br>
    {{ Form::text('recruiter_phone', '', array('class'=>'form-control'))}} 
<br>
email<br>
    {{ Form::text('recruiter_email', '', array('class'=>'form-control'))}} 
<br>
company<br>
    {{ Form::text('recruiter_company', '', array('class'=>'form-control'))}} 
<br>
Rating<br>
    {{ Form::text('recruiter_rating', '', array('class'=>'form-control'))}} 
<br>
Comments<br>
    {{ Form::textarea('recruiter_comments', '', array('class'=>'form-control'))}} 
<br>
Referred by<br>
    {{ Form::text('recruiter_referred_by', '', array('class'=>'form-control'))}} 
<br>
-->


    {{ Form::submit('Submit', array('class'=>'btn btn-default'))}}         

{{ Form::close() }}


<?php
echo '<br><a class="btn btn-danger" href="/">Cancel</a>';

?>

</div>
</div>
@stop