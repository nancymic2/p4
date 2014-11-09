@extends('_master')

@section ('password')

<?php 

echo '<div id="stuff" style="width:730px; margin-top: 20px; margin-bottom: 20px; border: 1px solid gray; padding-left: 20px; padding-bottom: 20px; padding-right: 20px;">';	
echo '<br>';
echo '<h3>Output:</h3>';

echo '<h4>';
echo 'Your password is: <br>';
 
echo $theword;

echo '</h4>';

echo '</div>';
?>
@stop







