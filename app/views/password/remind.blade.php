
@extends('_master')

@section ('remind')

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



@if (Session::has('error'))
  {{ trans(Session::get('reason')) }}
@elseif (Session::has('success'))
  An email with the password reset has been sent.
@endif



{{ Form::open(array('route' => 'password.request')) }}


 
  <p>{{ Form::label('email', 'Email') }}
  {{ Form::text('email', '', array('class'=>'form-control'))}} <br>{{ Form::submit('Submit') }}</p>
 
{{ Form::close() }}

<br>
Clicking Submit will send a password reset link to this email address.<br>
Please check your email.
<br>
</div>
</div>
@stop