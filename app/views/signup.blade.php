

@extends('_master')

@section ('signup')

<div class="container" style="width:500px; margin-left: -10px;">
	<div class="col-sm-6">
<h2>&nbsp;</h2>
<h4>Glad you decided to sign up!</h4>
  <script src="http://code.jquery.com/jquery-1.9.0.min.js" type="text/javascript"></script>

  <script src="jquery.complexify.js" type="text/javascript"></script>


<script type="text/javascript">
    $(function () {
        $("#password").complexify({}, function (valid, complexity) {
            if (!valid) {
                $('#progress').css({'width':complexity + '%'}).removeClass('progressbarValid').addClass('progressbarInvalid');
            } else {
                $('#progress').css({'width':complexity + '%'}).removeClass('progressbarInvalid').addClass('progressbarValid');
            }
            $('#complexity').html(Math.round(complexity) + '%');
        });
    });
</script>


{{ Form::open(array('url' => '/signup')) }}

 	First Name<br>
    {{ Form::text('first', '', array('class'=>'form-control'))}}  &nbsp; <br>


 	Last Name<br>
    {{ Form::text('last', '', array('class'=>'form-control'))}}  &nbsp; <br>


    Email&nbsp;<br>
    {{ Form::text('email', '', array('class'=>'form-control'))}}  &nbsp; <br>

    <span>Password:</span>
    {{ Form::text('password', '', array('class'=>'form-control', 'id'=> 'password'))}} &nbsp; 

    <div id="progressbar"><div id="progress"></div></div>

        <div id="status">
        <div id="complexity">0%</div>
        </div>

     Password Complexity Meter<br><br>

    {{ Form::submit('Submit', array('class'=>'btn btn-default'))}}   <br>

    {{ Form::close() }}



<br>
 <a class="btn btn-warning" href="/login">Or log in</a> <br> &nbsp;
</div>
</div>
@stop







