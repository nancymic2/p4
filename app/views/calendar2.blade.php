<?php
$jobdate = Session::get('followupBy');
$jobtime = Session::get('intTime');
$jobmins=$jobtime;
//echo 'test';
//echo $jobdate;

$newdate=str_replace('-', '', $jobdate).'<br>'; 
echo $newdate;
$newdate2=$newdate+1;

https://calendar.google.com/calendar/render?action=TEMPLATE&text=Interview&dates=20151124T030000/20151124T040000&details=&sprop=&location=toBeDetermined#eventpage_6

/////////////////WORKING//////////////
/*
$newerurl= '<a href="http://www.google.com/calendar/event?action=TEMPLATE&text=&dates='
.$newdate.'/'.$newdate.
'&details=&sprop=&location=home">add to google calendar</a>';
*/
///////////////////////////////////

$newerurl= '<a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=Interview&dates='.$newdate.'T'.$jobtime.'/'.$newdate.'T'.$jobmins.'&details=&sprop=&location=toBeDetermined#eventpage_6">add your interview date to google calendar</a>';

$googlecal='<a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=Interview&dates='.$newdate.'T'.$jobtime.'/'.$newdate.'T'.$jobmins.'&details&sprop&location=toBeDetermined&pli=1&sf=true&output=xml#eventpage_6">add your interview date to google calendar</a>';

/*$newerurl= '<a href="http://www.google.com/calendar/event?action=TEMPLATE&text=applyToJob&dates='
.$newdate.'T090000'.'/'.$newdate.'T123000&details=&sprop=&location=Online"'.' target="_blank">add to google calendar</a>'; */
echo $jobtime;
echo '<br>';
echo '<a href="';
echo 'https://calendar.google.com/calendar/render?action=TEMPLATE&text=Interview&dates=';
echo $jobdate;
echo 'T';
echo $jobtime;
echo '/';
echo $jobdate;
echo 'T';
echo $jobtime;
echo '&details=&sprop=&location=toBeDetermined#eventpage_6">';
echo 'add to cal<a>';





$newesturl=str_replace('%3Cbr%3E', '', $newerurl); 
$newesturl2=str_replace('<br>', '', $newesturl); 
echo $newdate2;
echo 'Your job has been created.';
echo '<br>'; 
//echo $googlecal;
echo $newesturl2;
echo '<br>'; 
echo '<br><a class="btn btn-info" onclick="window.history.back()">Cancel</a></div></div>';
