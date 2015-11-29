@extends('_master')

@section ('yourcosts')

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

<?php
$tgas=0;
$tair=0;
$ttrain=0;
$thotel=0;
$tmeals=0;
$tstamps=0;
$tink=0;
$tpaper=0;
$thardware=0;
$tportfolio=0;
$tphone=0;
$tclothing=0;
$tentertainment=0;
$counter=0;

$file = 'myexpenses.csv'; ///
file_put_contents($file, "");  ///

// Open the file to get existing content
$current = file_get_contents($file);  ///

$current .= 'date, job ID, gas, air, train, hotel, meals, postage, ink, paper, hardware, portfolio, phone, clothing, entertainment';

$current .= "\n";

  $l=0;  
  $m=0;   
  $n=0;
  $expenses = Expense::where('user_id', '=', Auth::user()->id)->get();
  $applications = Application::where('user_id', '=', Auth::user()->id)->get();
  $companies = Company::where('user_id', '=', Auth::user()->id)->get();
  


echo '<script type="text/javascript" src="http://p4.scholarpaws.com/js/jquery.tablesorter.min.js"></script>';
  echo '<div class="container">'; 
  echo '<h2>Your Expenses</h2>';

echo '<h3>Download the Excel file: <b>&#8659;</b></h3>';
echo 'download <u><a href="myexpenses.csv">the file</a></u> in CSV format<br>';
echo 'CSV is also better for phone viewing<br>';
echo '<b>*Note</b>, in Excel you may have to format the date column as date to see dates<br>';
echo 'Click on Exp ID to edit that expense record.';
//echo 'because you really need a file';

  echo '<p>';
  echo '<table id="myTable" class="tablesorter" border="2" cellpadding="4" style="width: 100%; table-layout: fixed;"> 

  <caption>
  Sort Your Expenses by field
  </caption>
  <thead>
    <tr>  
      <th style="width: 6.66%;">Date</th>
      <th style="width: 3.33%;">Job ID</th>
      <th style="width: 6.66%;">Gas</th>
      <th style="width: 6.66%;">Air</th>
      
      <th style="width: 6.66%;">Train</th>

      <th style="width: 6.66%;">Hotel</th>
      <th style="width: 6.66%;">Meals</th>
      <th style="width: 6.66%;">Postage</th>
      <th style="width: 6.66%;">Ink</th>
      <th style="width: 6.66%;">Paper</th>
      <th style="width: 6.66%;">Hardware</th>
      <th style="width: 6.66%;">Portfolio</th>
      <th style="width: 6.66%;">Phone</th>
      <th style="width: 6.66%;">Clothing</th>
      <th style="width: 6.66%;">Entertain</th>
      <th style="width: 3.33%;">Exp ID</th>



    </tr>  </thead>   <tbody>';
/*$resum[]="";
$resid[]="";
    foreach($resumes as $resume) {
   $l++;
   $resum[$l] = $resume->name;
   $resid[$l] = $resume->id;
   //echo $resum[$i];
   //echo $resid[$i];
 } */


$corp[]="";
$corpid[]="";
    foreach($companies as $company) {
   $m++;
   $corp[$m] = $company->company;
   $corpid[$m] = $company->id;
  // echo $corp[$i];
  // echo $corpid[$i];
 }


# loop through the Collection and access just the data
foreach($expenses as $expense) {
   $n++;
   $exp_id[$n] = $expense->id;
$counter++;

    echo '<tr>';
    echo '<td>';
echo $expense['exp_date'];

  $current .= $expense['exp_date'];
  $current .= ",";


    $thecompany=$expense['company'];

    $key = array_search($thecompany, $corpid);
    echo $corp[$key];


    //echo '<b>company:</b> ';
    //echo $completedapp['company']."<br>";
    echo '</td>';
    echo '<td>';
    ///job goes here

  $current .= $expense['application_id'];
  $current .= ",";
    echo $expense['application_id'];

    echo '</td>';
    echo '<td>';
    //echo '<b>role:</b> ';
    echo $expense['gas'];

    $trimgas=trim($expense['gas']);

  $current .= $trimgas;
  $current .= ",";


    $tgas=$trimgas+$tgas;

    echo '</td>';
    echo '<td>';
    echo $expense['airfare']."<br>";
    $trimair=trim($expense['airfare']);

  $current .= $trimair;
  $current .= ",";

    $tair=$trimair+$tair;
    echo '</td>';
    echo '<td>';
    //echo '<b>Applied date:</b> ';
    echo $expense['train']."<br>";
    $trimtrain=trim($expense['train']);

  $current .= $trimtrain;
  $current .= ",";

    $ttrain=$trimtrain+$ttrain;
    echo '</td>';
    echo '<td>';
    //echo '<b>Hiring Manager:</b> ';
    echo $expense['hotel']."<br>";
    $trimhotel=trim($expense['hotel']);

  $current .= $trimhotel;
  $current .= ",";

    $thotel=$trimhotel+$thotel;
    echo '</td>';
    echo '<td>';

    echo $expense['meals']."<br>";
    $trimmeals=trim($expense['meals']);

  $current .= $trimmeals;
  $current .= ",";

    $tmeals=$trimmeals+$tmeals;
    echo '</td>';
    echo '<td>';

    echo $expense['stamps']."<br>";
    $trimstamps=trim($expense['stamps']);

  $current .= $trimstamps;
  $current .= ",";

    $tstamps=$trimstamps+$tstamps;
    echo '</td>';
    //echo '<td>';
    //echo '<b>resume used:</b> ';
    //echo $completedapp['resumeUsed']."<br>"; //this equals the resume id on resume table
   // $theresume=$completedapp['resumeUsed'];

    //$key = array_search($theresume, $resid);
    //echo $resum[$key];

    //echo '</td>';
    echo '<td>';

    echo $expense['ink'];
    $trimink=trim($expense['ink']);

  $current .= $trimink;
  $current .= ",";

    $tink=$trimink+$tink;
    echo '</td>';
    echo '<td>';
    echo $expense['paper']."<br>";
    $trimpaper=trim($expense['paper']);

  $current .= $trimpaper;
  $current .= ",";

    $tpaper=$trimpaper+$tpaper;
    echo '</td>';
        echo '<td>';
    echo $expense['hardware']."<br>";
    $trimhardware=trim($expense['hardware']);

  $current .= $trimhardware;
  $current .= ",";

    $thardware=$trimhardware+$thardware;
    echo '</td>';
        echo '<td>';
    echo $expense['portfolio']."<br>";
    $trimportfolio=trim($expense['portfolio']);

  $current .= $trimportfolio;
  $current .= ",";

    $tportfolio=$trimportfolio+$tportfolio;
    echo '</td>';
        echo '<td>';
    echo $expense['phone']."<br>";
    $trimphone=trim($expense['phone']);

  $current .= $trimphone;
  $current .= ",";


    $tphone=$trimphone+$tphone;
    echo '</td>';
        echo '<td>';
    echo $expense['clothing']."<br>";
    $trimclothing=trim($expense['clothing']);

  $current .= $trimclothing;
  $current .= ",";
    $tclothing=$trimclothing+$tclothing;
    echo '</td>';
        echo '<td>';
    echo $expense['entertainment']."<br>";
    $trimentertainment=trim($expense['entertainment']);

  $current .= $trimentertainment;
  $current .= ",";


    $tentertainment=$trimentertainment+$tentertainment;
    echo '</td>';
    echo '<td>';
    echo '<a href="/expense/edit/';
    echo $expense['id'];
    echo '">';
    echo $expense['id'];
    echo '</a>';
    echo '</tr>';

    echo '<script> var apldata = "<php echo $app_id[$i]; ?>" </script>';

  //unset($res);
$current .= "\n";

  }
    echo '<br>';

    echo '</tbody> </table>';

    echo '<table border="2" cellpadding="4" style="width: 100%; table-layout: fixed;"> <tr>';

    echo '<td style="width: 6.66%;"><b>';
    echo '<b>Totals</b>';
    echo '</td>';

    echo '<td style="width: 3.33%;"><b>';
    echo '</b></td>';

    echo '<td style="width: 6.66%; text-align:right;"><b>';
    echo $tgas;
    echo '</b></td>';
    echo '<td style="width: 6.66%; text-align:right;"><b>';
     echo $tair;
    echo '</b></td>';
    echo '<td style="width: 6.66%; text-align:right;"><b>';
    echo $ttrain;
    echo '</b></td>';
    echo '<td style="width: 6.66%; text-align:right;"><b>';
     echo $thotel;
    echo '</b></td>';
        echo '<td style="width: 6.66%; text-align:right;"><b>';
         echo $tmeals;
    echo '</b></td>';
        echo '<td style="width: 6.66%; text-align:right;"><b>';
         echo $tstamps;
    echo '</b></td>';
        echo '<td style="width: 6.66%; text-align:right;"><b>';
         echo $tink;
    echo '</b></td>';
        echo '<td style="width: 6.66%; text-align:right;"><b>';
         echo $tpaper;
    echo '</b></td>';
        echo '<td style="width: 6.66%; text-align:right;"><b>';
         echo $thardware;
    echo '</b></td>';
        echo '<td style="width: 6.66%; text-align:right;"><b>';
         echo $tportfolio;
    echo '</b></td>';
        echo '<td style="width: 6.66%; text-align:right;"><b>';
         echo $tphone;
    echo '</b></td>';
        echo '<td style="width: 6.66%; text-align:right;"><b>';
         echo $tclothing;
    echo '</b></td>';
        echo '<td style="width: 6.66%; text-align:right;"><b>';
         echo $tentertainment;
    echo '</b></td>';
   echo '<td style="width: 3.33%;"><b>';
    echo '</b></td>';

    echo '</tr></table>';

echo '</p>';
echo '<br><br>';

file_put_contents($file, $current);

echo '<a href="http://help.webconnex.com/article/196-import-csv-files-into-quickbooks" target="_blank">Import your CSV to QuickBooks</a><br><a href="http://money.mvps.org/faq/article/27.aspx" target="_blank">Import your CSV to MS Money</a><br><a href="https://ttlc.intuit.com/questions/1945069-import-data-from-csv-file" target="_blank">Import your CSV to Turbo Tax</a><br>';

?>

<canvas id="allexpense" width="1000" height="350" style="margin-left: 300px;"/>

transportation, hotel, meals, supplies, hardware, portfolio, phone, clothing, entertainment
<br><a class="btn btn-success" onclick="window.history.back()">Cancel</a>

<script type="text/javascript"> 
    window.onload=function(){
          var canvas=document.getElementById('allexpense');
          var ctx=canvas.getContext('2d');
          var scores=[<?php echo $tgas/10; ?>, <?php echo $tair/10; ?>, <?php echo $ttrain/10; ?>, <?php echo $thotel/10; ?>, <?php echo $tmeals/10; ?>, <?php echo $tstamps/10; ?>, <?php echo $tink/10; ?>, <?php echo $tpaper/10; ?>, <?php echo $thardware/10; ?>, <?php echo $tportfolio/10; ?>, <?php echo $tphone/10; ?>, <?php echo $tclothing/10; ?>, <?php echo $tentertainment/10; ?>];
          var width=70;
          var currx=50;
          var base=200;

          ctx.fillStyle='#E38AAE';

          for (var i=0; i<scores.length; i++) {
              var h=scores[i];
              ctx.fillRect(currx, canvas.height-h, width, h);
              currx+=width+10;

          }
    };
    
</script>

<br><br>
</div>
</div>
</div>
@stop