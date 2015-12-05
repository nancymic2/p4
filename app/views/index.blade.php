	
@extends('_master')

@section ('index')

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

<!--<div class="container" style="background-image: url('home.jpg'); margin-top: -40px; width: 100%; background-repeat: no-repeat;">-->
<div class="container">
<!--     <div class="col-sm-6">  -->

<div style="background-color: red; margin: 40px; width: 150px; height: 150px; float: left;"> </div>
<div style="background-color: red; margin: 40px; width: 150px; height: 150px; float: left;"></div>
    <div style="background-color: red; margin: 40px; width: 150px; height: 150px; float: left;"></div>
        <div style="background-color: red; margin: 40px; width: 150px; height: 150px; float: left;"></div>
            <div style="background-color: red; margin: 40px; width: 150px; height: 150px; float: left;"></div>
<h2>&nbsp;</h2>
<h2>Welcome to CareerTrax!</h2>
<p>test credentials: user test@test.com, password: testtest</p>
<p>To see some data, try user: 4@5.com,  password: 123456
<p>CareerTrax lets you keep track of 
	<ul><li>your job appplications</li>
		<li>your job listings</li>
		<li>your contacts</li>
	    <li>your resumes</li>
	    <li>your expenses</li>
	    <li>important dates</li>
	    <li>your candidate system login info</li>
	</ul>    
</p>


</div>

@stop