
@extends('_master')

@section ('profile-edit')


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



<h3>View or Edit Profile</h3>
<b>Current values:</b><br>
<?php
  $profiles = Profile::where('user_id', '=', Auth::user()->id)->get();

  echo'';

   # loop through the Collection and access just the data
    foreach($profiles as $profile) {
        echo '<b>Degree - </b>';
        echo $profile['degree'];
        echo '<br>';
        echo '<b>Major - </b>';
        echo $profile['major'];
        echo '<br>';
        echo '<b>Experience - </b>';
        echo $profile['tenure'];
        echo '<br>';

       

}

?>

<br>

<form method="post" action="upprofile()">
<select name="degree">
    <option value="doctoral">Doctoral</option>
    <option value="masters">Masters</option>
    <option value="bachelor">Bachelor</option>
    <option value="high school">High School</option>

</select>!-- assign a name for the button -->
 <input type="submit" value="Submit">
</form>


<?php
function upprofile()
{
     $profiles = Profile::where('user_id', '=', Auth::user()->id)->get();

    foreach($profiles as $profile) {
    DB::table('profiles')
            ->where('id', $profile['id'])
            ->update(array('degree' => $profile['degree']));
   
} 

?>

<br>
<b>Add new values below:</b>





<br><a class="btn btn-danger" onclick="window.history.back()">Cancel</a>
<!-- note use email as the type vs text if you want validation -->
<br><br>
</div>
</div>
@stop