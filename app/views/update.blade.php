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
.$newdate.'T090000'.'/'.$newdate.'T123000&details=&sprop=&location=Online">add to google calendar</a>';


$newesturl=str_replace('%3Cbr%3E', '', $newerurl); 
$newesturl2=str_replace('<br>', '', $newesturl); 


echo '<br>'; 
echo $newesturl2;