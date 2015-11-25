<?php
$jobdate = Session::get('googlecal');


//echo $jobdate;
echo '<h4>Your job has been created.</h4>';

echo '<a href="';
echo 'https://calendar.google.com/calendar/render?action=TEMPLATE&text=Interview%20';


echo $jobdate;
echo '&details=&sprop=&location=toBeDetermined#eventpage_6">';
echo '<h3>Add to Google Calendar</h3></a>';

echo '<br><a href="#" onclick="window.history.back()">Cancel</a>';
