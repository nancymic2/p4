

@extends('_master')

@section ('login')

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
                 <script type="text/javascript">
                    window.onload=function(){
                    var d =  new Date();
                    alert(d.getMonth() +" " + d.getDate()+" " + d.getFullYear());
   

                      var history = localStorage.getItem("login");

                        if (history){
                            alert(history);
                        }
                        
                            var somedate=(d.getMonth() +" " + d.getDate()+" " + d.getFullYear());
                            window.localStorage.setItem("login", somedate);   





                    };
                 </script>

<div class="container">
    <div class="col-sm-6">
<h2>&nbsp;</h2>
<h2>Please log in</h2>





{{ Form::open(array('url' => '/login')) }}

    Email&nbsp;<br>
    {{ Form::text('email', '', array('class'=>'form-control'))}}  &nbsp; <br>

    Password:&nbsp;<br>
    {{ Form::text('password', '', array('class'=>'form-control'))}} &nbsp; <br><br>

    {{ Form::submit('Log In', array('class'=>'btn btn-default'))}}   

{{ Form::close() }}

<!--password field was called password not text change  for bootstrap-->
<br>
 <a class="btn btn-warning" href="/signup">Or sign up</a> <p>&nbsp;</p>
 <a class="btn btn-primary" href="password/remind">Forgot Password?</a> <p>&nbsp;</p>



</div>
</div>
@stop






