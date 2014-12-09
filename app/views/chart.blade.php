
@extends('_master')

@section ('chart')
<?php

$newdata0=$salarycount[0];
$newdata1=$salarycount[1];
$newdata2=$salarycount[2];



?>

<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
    
      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});
      
      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table, 
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

      // Create the data table.
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'salary');
      data.addColumn('number', 'jobs');
      data.addRows([
        ['under $75000', <?php echo $newdata0; ?>],
        ['$75000 to 100,000', <?php echo $newdata1; ?>],
        ['over $100,000', <?php echo $newdata2; ?>],
 
      ]);

      // Set chart options
      var options = {'title':'Annual Salary frequencies across the site',
                     'width':700,
                     'height':400};

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
    </script>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->

  <title>Career Trax</title>
  <link rel="stylesheet" href="hmin.css">
</head>
<body>
  <br>
<h3>This chart shows annual salaries from jobs to apply to saved by all users of the site </h3>


<!--Div that will hold the pie chart-->
    <div id="chart_div" style="width:400; height:300"></div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>
</html>
@stop