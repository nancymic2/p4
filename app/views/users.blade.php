@extends('_master')

@section ('users')

<?php 
echo '<div id="stuff" style="width:730px; margin-top: 20px; margin-bottom: 20px; border: 1px solid gray; padding-left: 20px; padding-bottom: 20px; padding-right: 20px;">';	
echo '<br>';
echo '<h3>Output:</h3>';
$faker = Faker\Factory::create();
for ($i=1; $i<=$numusers; $i++)
{
echo '<h3>';
echo $faker->name;
echo '</h3>';
//echo '<br>';
echo $faker->address;
echo '<br>';
echo '<br>';
}
echo '</div>';
?>
@stop


