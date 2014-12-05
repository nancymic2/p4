	
@extends('_master')

@section ('jobstoapply')

<div class="container">
	<div class="col-sm-6"
<h2>&nbsp;</h2>
<h2>Join CareerTrax! or log in</h2>
<h3>

<?php
function jobstoapply() {
$jobs = Postedjob::where('user_id', '=', Auth::user()->id)->get();
  //echo '<div class="container">'; 
  //echo '<p>';
   //echo $jobs;
   # loop through the Collection and access just the data
foreach($jobs as $job) {

echo '<p>';
    echo '<b>role:</b> ';
    echo $job['role']."<br>";

    echo '<b>company:</b> ';
    echo $job['company']."<br>";

    echo '<b>salary:</b> ';
    echo $job['salary']."<br>";

    echo '<b>job url:</b> ';
    //echo $job['url']."<br>";
    echo '<a href="'.$job['url'].'" target="_blank">'. $job['url'].'</a><br>';

    echo '<b>Apply by:</b> ';
    echo $job['applyby']."<br>";

    echo '____________________<br>';
    echo '</p>';
    echo '</div>';
}
} 

   echo '<br>  <a href="/">back</a> <br>';
    //$email = User::where('user_id', '=', Auth::user()->id)->get('email');
    //echo $email;
    //  $collection = Book::all();
  


?>
</h3>
</div>

</div>

@stop