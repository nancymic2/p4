<?php
$jobdate = Session::get('googlecal');


//echo $jobdate;

echo '<br>';
echo '<a href="';
echo 'https://calendar.google.com/calendar/render?action=TEMPLATE&text=Interview&dates=';
echo $jobdate;
echo '&details=&sprop=&location=toBeDetermined#eventpage_6">';
echo 'add to cal<a>';

echo '<br>';

echo 'Your job has been created.';
echo '<br>'; 
//echo $googlecal;

echo '<br>'; 
echo '<br><a class="btn btn-info" onclick="window.history.back()">Cancel</a></div></div>';
