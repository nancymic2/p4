@extends('_master')

@section ('salaryedchart')

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

<?php
$a=array("red","green");

 			$salaryarray=[''];
            $eduarray=[''];

            $profiles = Profile::all();
                 foreach ($profiles as $profile) {
                  	array_push($salaryarray, $profile['salrange']);
                 	 array_push($eduarray, $profile['degree']);
                    //echo $profile['degree'];
                   // echo $profile['salrange'];
                 	 echo $eduarray['0'];

                 }
?>

                <script type="text/javascript">
					alert('<?php echo $eduarray['0']; ?>');  //this is how to wrap js around php statement. uck or insert php into js function
					alert('hi');   // also see chart.blade for js in php in
				</script>

<br><a class="btn btn-danger" onclick="window.history.back()">Cancel</a>
<!-- note use email as the type vs text if you want validation -->
<br><br>
</div>
</div>
@stop