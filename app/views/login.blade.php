

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
                            var history = localStorage.getItem("login");

                            if (history){
                                
                                    //alert("You last logged in on: " + history);
                                    logalert=document.getElementById('alert');
                                    logalert.style.visibility="visible";
                                    logalert.style.cursor="pointer";
                                    logalert.innerHTML="You last logged in on: " + history;
                                    logalert.addEventListener('click', function(){
                                                                logalert.style.visibility="hidden";
                                                             });
                                }
                            var month = d.getMonth()+1;
                            var somedate=(month +" " + d.getDate()+" " + d.getFullYear());//alert(d.getMonth() +" " + d.getDate()+" " + d.getFullYear());
                            window.localStorage.setItem("login", somedate);   

                        };
                 </script>

<div class="container">
    <div class="col-sm-6">
<h2>&nbsp;</h2>
<h2>Please log in</h2>

<div id="alert" style="z-index: 90; padding: 10px; font-weight: bold; border-radius: 9px; width: 300px; height: 50px; color: white; background-color: #9172EC; visibility: hidden; position: relative; top: 1px; left: 5px;">Your hsfhakldd</div>
<br>
<script>
function isValid(pw) { 
    document.getElementById('login').style.visibility="visible";
     logalert.style.visibility="hidden";
    var field=document.getElementById('password');
    value=field.value;
    if (/\D/.test(value)){
        if (/\W/.test(value)){

            logalert=document.getElementById('alert');
            if (logalert.style.visibility=="hidden"){
                logalert.style.visibility="visible";
                logalert.style.cursor="pointer";
            }
            logalert.innerHTML="Please enter a valid password.";
            logalert.addEventListener('click', function(){
            //logalert.style.visibility="hidden";
            //document.getElementById('login').style.visibility="hidden";
            });

        field.value='';
        document.getElementById('login').style.visibility="hidden";
        } 
    }

}
</script>

{{ Form::open(array('url' => '/login')) }}

    Email&nbsp;<br>
    <!--{{ Form::text('email', '', array('class'=>'form-control'))}}  &nbsp; <br>-->

    <input name="email" id="email" type="email" required placeholder="Enter a valid email address" class="form-control"><br>

    Password:&nbsp;<br>
    <input name="password" id="password" type="password" class="form-control" onmouseout="isValid('password');">

    <!--{{ Form::text('password', '', array('class'=>'form-control'))}}--> &nbsp; <br><br>

    <!--{{ Form::submit('Log In', array('class'=>'btn btn-success'))}}   -->
    <input type="submit" id="login" value="Log In" class="btn-success" style="visibility: visible;"> 
  

{{ Form::close() }}

<!--password field was called password not text change  for bootstrap-->
<br>
 <a class="btn btn-warning" href="/signup">Or sign up</a> <br><br>
 <a class="btn btn-primary" href="password/remind">Forgot Password?</a> <p>&nbsp;</p>



</div>
</div>
@stop






