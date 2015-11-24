<?php
$jobdate = Session::get('googlecal');


//echo 'test';
//echo $jobdate;


echo $jobdate;



/////////////////WORKING//////////////
/*
$newerurl= '<a href="http://www.google.com/calendar/event?action=TEMPLATE&text=&dates='
.$newdate.'/'.$newdate.
'&details=&sprop=&location=home">add to google calendar</a>';
*/
///////////////////////////////////







/*$newerurl= '<a href="http://www.google.com/calendar/event?action=TEMPLATE&text=applyToJob&dates='
.$newdate.'T090000'.'/'.$newdate.'T123000&details=&sprop=&location=Online"'.' target="_blank">add to google calendar</a>'; */

echo '<br>';
echo '<a href="';
echo 'https://calendar.google.com/calendar/render?action=TEMPLATE&text=Interview&dates=';
echo $jobdate;
echo '&details=&sprop=&location=toBeDetermined#eventpage_6">';
echo 'add to cal<a>';



echo 'Your job has been created.';
echo '<br>'; 
//echo $googlecal;

echo '<br>'; 
echo '<br><a class="btn btn-info" onclick="window.history.back()">Cancel</a></div></div>';
