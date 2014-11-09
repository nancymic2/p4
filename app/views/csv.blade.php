



@extends('_master')
@section ('csv')

<?php 

//header('Content-Type: text/csv; charset=utf-8');
//header('Content-Disposition: attachment; filename=data.csv');

//$output = fopen('php://output', 'w');
//fputcsv($output, array('name', 'address'));



$faker = Faker\Factory::create();

$file = 'people.csv';
file_put_contents($file, "");

// Open the file to get existing content
$current = file_get_contents($file);

for ($i=1; $i<=$numusers; $i++)
{
	$current .= $faker->name;
	$current .= ",";

	//now find the comma in the address and replace with ;
$next = $faker->address;
	$newaddr=str_replace(',',';',$next); 
	//$newaddr2=str_replace('\n',';',$newaddr);  

	$newaddr2 = str_replace(array("\n","\r\n"), '', $newaddr);

	$current .= $newaddr2;
	
	$current .= "\n";
}

// Write the contents back to the file
file_put_contents($file, $current);

echo '<div id="stuff" style="width:730px; margin-top: 20px; margin-bottom: 20px; border: 1px solid gray; padding-left: 20px; padding-bottom: 20px; padding-right: 20px;">';	
echo '<br>';
echo '<h3>Download:</h3>';
echo '<div class="csv">download <u><a href="people.csv">the file</a></u> in CSV format</div>';
//echo 'because you really need a file';
echo '</div>';
?>




@stop







