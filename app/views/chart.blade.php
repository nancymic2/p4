
@extends('_master')

@section ('chart')
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">


                <link href="/css/layout.css" rel="stylesheet">
                <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" type="text/css" media="all" />
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js" type="text/javascript"></script>

                <script src="//code.jquery.com/jquery-1.9.1.js"></script> 
                <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js" type="text/javascript"></script>



                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

                  <!-- Latest compiled and minified CSS -->





<?php

$newdata0=$salarycount[0];
$newdata1=$salarycount[1];
$newdata2=$salarycount[2];



?>



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

<div class="container">
    <div class="col-sm-6">

<h3>This chart shows annual salaries of all users.</h3>


<!--Div that will hold the pie chart-->
<div id="chart_div" style="width:400; height:300"></div>

</div>
</div>

@stop