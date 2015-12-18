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
    <div class="col-sm-6">
<h2>&nbsp;</h2>
<h2>Welcome to CareerTrax</h2>

When you're looking for a job, whether you're unemployed or just shopping around, there's a lot of information you'll collect. It's likely that you'll collect
more than you expected. And it is not always apparent that you can use this information in the future<br>
Have you ever lost a hard drive with all your resumes on it or wish you remembered a job for which you interviewed in the past?<br>
Do you wish you had kept track of all your job hunt expenses when tax time came around?<br>
<br>
Take a look at the video below. You'll see the problem we all have keeping our data organized, and what you can do to get on track! <br><br>

<iframe width="853" height="480" src="https://www.youtube.com/embed/o2iHedm10xg" frameborder="0" allowfullscreen></iframe> <br>


</div>
</div>

@stop