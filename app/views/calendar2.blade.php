<?php
$jobdate = Session::get('googlecal');


//echo $jobdate;

echo '<br>';
echo '<a href="';
echo 'https://calendar.google.com/calendar/render?action=TEMPLATE&text=Interview&dates=';
echo $jobdate;
echo '&details=&sprop=&location=toBeDetermined#eventpage_6">';
echo '<h3>Add to Google Calendar</h3></a>';

echo '<br>';

echo '<h4>Your job has been created.</h4>';
echo '<br>'; 
//echo $googlecal;

echo '<br>'; 
echo '<br><a herf="#" onclick="window.history.back()">Cancel</a></div></div>';
