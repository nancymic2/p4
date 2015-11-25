@extends('_master')

@section ('calendar2')

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


<?php
$jobdate = Session::get('googlecal');


//echo $jobdate;
echo '<h4>Your job has been created.</h4>';

echo '<a href="';
echo 'https://calendar.google.com/calendar/render?action=TEMPLATE&text=Interview%20';


echo $jobdate;
echo '&details=&sprop=&location=toBeDetermined#eventpage_6">';
echo '<h3>Add to Google Calendar</h3></a>';


echo  '<br><a class="btn btn-danger" onclick="window.history.back()">Cancel</a>';

?>

</div>
</div>

@stop
