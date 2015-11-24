@extends('_master')

@section ('calendar')

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
$jobdate = Session::get('applybydate');
//echo 'test';
//echo $jobdate;

$newdate=str_replace('-', '', $jobdate).'<br>'; 
echo $newdate;
$newdate2=$newdate+1;


/////////////////WORKING//////////////
/*
$newerurl= '<a href="http://www.google.com/calendar/event?action=TEMPLATE&text=&dates='
.$newdate.'/'.$newdate.
'&details=&sprop=&location=home">add to google calendar</a>';
*/
///////////////////////////////////

$newerurl= '<a href="http://www.google.com/calendar/event?action=TEMPLATE&text=applyToJob&dates='
.$newdate.'T090000'.'/'.$newdate.'T123000&details=&sprop=&location=Online"><h3>add to google calendar</h3></a>'; 


/*$newerurl= '<a href="http://www.google.com/calendar/event?action=TEMPLATE&text=applyToJob&dates='
.$newdate.'T090000'.'/'.$newdate.'T123000&details=&sprop=&location=Online"'.' target="_blank">add to google calendar</a>'; */


$newesturl=str_replace('%3Cbr%3E', '', $newerurl); 
$newesturl2=str_replace('<br>', '', $newesturl); 


echo '<br>'; 
echo $newesturl2;
echo '<br>'; 
echo '<a href="/savedJobs">Back</a>'; 
?>