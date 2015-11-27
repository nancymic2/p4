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

 			$salaryarray=array();
            $eduarray= array();
            $i=0;
            $profiles = Profile::all();
                 foreach ($profiles as $profile) {
                  	array_push($salaryarray, $profile['salrange']);
                 	$eduarray = $profile['degree'];
                 	 //print_r($eduarray);
                 	/* echo '<br>';
                 	 //echo gettype($eduarray);
                 	 echo '<br>';
					 //print_r($salaryarray);
					 echo '<br>';
//echo ($salaryarray[0][1]);
					 //echo count($salaryarray);
					 echo '<br>';
					 echo $salaryarray[$i];
					 echo '<br>';
					 //echo $i;
            		 $i++; */
                 }
             
?>

                <script type="text/javascript">
					//alert('<?php echo $salaryarray[1]; ?>');  //this is how to wrap js around php statement. uck or insert php into js function
					//alert('hi');   // also see chart.blade for js in php in
					//var canvas=document.getelementById('salaryed');
					//var ctx=canvas.getContent('2d');

				</script>


				<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawSeriesChart);

    function drawSeriesChart() {

      var data = google.visualization.arrayToDataTable([
        ['ID', 'Salary', 'Degree', 'Region',     'Total Pop'],
        ['NE',    80.66,              1.67,      'Northeast',  33739900],
        ['NE',    79.84,              1.36,      'Northeast',         81902307],
        ['SO',    78.6,               1.84,      'South',         5523095],
        ['MIDW',    72.73,              2.78,      'Midwest',    79716203],
        ['NW',    80.05,              2,         'Pacific Northwest',         61801570],
        ['MIDW',    72.49,              1.7,       'Midwest',    73137148],
        ['MID',    68.09,              4.77,      'Middle',    31090763],
        ['CA',    81.55,              2.96,      'California',    7485600],
        ['SO',    68.6,               1.54,      'South',         141850000],
        ['NE',    78.09,              2.05,      'Northeast',  307007000]
      ]);

      var options = {
        title: 'Correlation between Salary, Highest educational degree, and US region',
        hAxis: {title: 'Education'},
        vAxis: {title: 'Salary'},
        bubble: {textStyle: {fontSize: 11}}
      };

      var chart = new google.visualization.BubbleChart(document.getElementById('series_chart_div'));
      chart.draw(data, options);
    }
    </script>
 <div id="series_chart_div" style="width: 900px; height: 500px;"></div>
<br><a class="btn btn-danger" onclick="window.history.back()">Cancel</a>
<!-- note use email as the type vs text if you want validation -->
<br><br>
</div>
</div>
@stop