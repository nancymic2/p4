@extends('_master')

@section ('about')

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
<div class="col-sm-2">
</div>
    <div class="col-sm-10">
<h2>&nbsp;</h2>
<h2>Welcome to CareerTrax</h2>

When you're looking for a job, whether you are unemployed or just shopping around, there's a lot of information you'll collect. It's likely that you'll collect
more than you expected. And it is not always apparent that you can use this information in the future<br>
Have you ever lost a hard drive with all your resumes on it or wish you remembered a job for which you interviewed in the past?<br>
Do you wish you had kept track of all your job hunt expenses when tax time came around?<br>
<br>
<!--Take a look at the video below. You'll see the problem we all have keeping our data organized, and what you can do to get on track! <br><br>

<iframe width="853" height="480" src="https://www.youtube.com/embed/o2iHedm10xg" frameborder="0" allowfullscreen></iframe> <br>
-->
<br>
<h3>So sign up and get organized</h3>
<ol>
    <li>Sign up</li>
    <li>Create a profile</li>
    <li>Add your first job
        <ol><li>Add the company to the database so you can easily add other jobs there later</li>
            <li>Add a link to you resume and all the information about it so you can point to it again</li>
            <li>Add the job</li>
        </ol>
    </li>
    <li>Add expenses and associate them with a job. For example, any travel, postage, entertainment expenses related to that job appication</li>
    <li>Keep track of your expenses with reporting</li>
    <li>Download Excel file expense reports</li>
    <li>Download Excel file for yuor job applications, in case you need to report on your search</li>
    <li>Get google calendar reminders for your interview appointments</li>
    <li>And lots more!</li>
</ol>
<h3>Give CareerTrax a spin and get your job hunt on track!</h3>

<a class="btn btn-warning" href="/signup">Sign up!</a> <br><br>

</div>
</div>

@stop
