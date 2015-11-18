@extends('_master')

@section ('account')

<div class="container">
	<div class="col-sm-6">
<h2>View/edit account info</h2>


        <?php 

$user = Auth::user();
$id = Auth::user()->id;  //note this works bec there is only 1 logged-in user, not an array/object of


echo '<a class="btn btn-success "href="/user/edit/';
echo $id;
echo'">Edit acct info</a> </h3>';
//echo '<a href="logout">log out</a> <br>';

//CANNOT TRY TO ACCESS THIS ON ANY GUEST PAGE


?>








<?php
echo '<br><a class="btn btn-danger" href="/">Cancel</a>';

?>

</div>
</div>
@stop