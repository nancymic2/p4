

@extends('_master')

@section ('signup')




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
<script>
function isValid(pw) { 
    var field=document.getElementById('password');
    value=field.value;
    if (/\D/.test(value)){
        if (/\W/.test(value)){
        alert ('Please enter only numbers and letters');


//$('#myModal').modal('show');

       field.value='';
        } 
    }
}
</script>

{{ Form::open(array('url' => '/signup')) }}

 	First Name<br>
    {{ Form::text('first', '', array('class'=>'form-control'))}}  &nbsp; <br>


 	Last Name<br>
    {{ Form::text('last', '', array('class'=>'form-control'))}}  &nbsp; <br>


    Email&nbsp;<br>
   <!-- {{ Form::text('email', '', array('class'=>'form-control'))}}  &nbsp; <br>-->

    <input name="email" id="email" type="email" required placeholder="Enter a valid email address" class="form-control"><br>


    <span>Password: (only letters and numbers permited)</span><br>
   <!-- {{ Form::text('password', '', array('class'=>'form-control', 'id'=> 'password'))}} &nbsp; -->
    <input name="password" id="password" type="password" class="form-control" onblur="isValid('password');">

    <div id="progressbar"><div id="progress"></div></div>

        <div id="status">
        <div id="complexity" style="background-color: #eeeeee;">0%</div>
        </div>

     Password Complexity <br><br>

    {{ Form::submit('Submit', array('class'=>'btn btn-default'))}}   <br>

    {{ Form::close() }}

<!--
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>This is a small modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
-->
<br>
 <a class="btn btn-warning" href="/login">Or log in</a> <br> &nbsp;
</div>
</div>
@stop







