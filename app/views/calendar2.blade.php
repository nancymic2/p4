<?php
$jobdate = Session::get('followupBy');
$jobtime = Session::get('intTime');
$jobmins=$jobtime+'003000';
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

$newerurl= '<a href="http://www.google.com/calendar/event?action=TEMPLATE&text=Interview&dates='
.$newdate.'T'.$jobtime.'/'.$newdate.'T'.$jobmins."&details=&sprop=&location=toBeDetermined".">"';<h3>add your interview date to google calendar</h3></a>'; 


/*$newerurl= '<a href="http://www.google.com/calendar/event?action=TEMPLATE&text=applyToJob&dates='
.$newdate.'T090000'.'/'.$newdate.'T123000&details=&sprop=&location=Online"'.' target="_blank">add to google calendar</a>'; */


$newesturl=str_replace('%3Cbr%3E', '', $newerurl); 
$newesturl2=str_replace('<br>', '', $newesturl); 

echo 'Your job has been created.';
echo '<br>'; 
echo $newesturl2;
echo '<br>'; 
echo '<br><a class="btn btn-info" onclick="window.history.back()">Cancel</a></div></div>';
