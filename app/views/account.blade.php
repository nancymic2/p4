@extends('_master')

@section ('account')

                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
                        <script src="jquery.knob.js"></script>
                <link href="/css/layout.css" rel="stylesheet">
                <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" type="text/css" media="all" />
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js" type="text/javascript"></script>
                <script src="//code.jquery.com/jquery-1.9.1.js"></script> 
                <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                    $(document).ready(function(){
                    $('input.date').datepicker({dateFormat: 'yy-mm-dd'});
                    })
                </script>

<div class="container">
    <div class="col-sm-6">
<h2>&nbsp;</h2>
<h2>View/edit profile and account info</h2>


<?php 

$user = Auth::user();
$id = Auth::user()->id;  //note this works bec there is only 1 logged-in user, not an array/object of

echo '<a class="btn btn-success "href="/user/edit/';
echo $id;
echo'">Edit acct info</a> </h3>';

echo '<br><br>';

echo '<a class="btn btn-success "href="/profile/edit/';
echo $id;
echo'">Edit profile</a> </h3>';
//echo '<a href="logout">log out</a> <br>';

//CANNOT TRY TO ACCESS THIS ON ANY GUEST PAGE
?>

<br>

<?php
echo '<br><a class="btn btn-danger" href="/">Cancel</a>';

?>
</div>
</div>

@stop