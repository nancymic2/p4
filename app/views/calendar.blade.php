<?php
$jobdate = Session::get('applybydate');
//echo 'test';
//echo $jobdate;

$newdate=str_replace('-', '', $jobdate).'<br>'; 
echo $newdate;

echo '<a href="http://www.google.com/calendar/event?action=TEMPLATE&text=microsoftapply&dates='.$newdate.'\/'.$newdate.'&details=&sprop=&location=home">add</a>';
//echo input['applyby'];
echo '<br>';
echo '<a href="http://www.google.com/calendar/event?action=TEMPLATE&text=&dates='.$newdate.'%2F'.$newdate.'&details=&sprop=&location=home">add</a>';
echo '<br>';
echo '<a href="http://www.google.com/calendar/event?action=TEMPLATE&text=&dates='. $newdate. '/'. $newdate. '&details=&sprop= &location=home">add cal</a>';

echo '<br>';
$myurl=urlencode('http://www.google.com/calendar/event?action=TEMPLATE&text=&dates='. $newdate. '/'. $newdate. '&details=&sprop= &location=home');
echo $myurl;