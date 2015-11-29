@extends('_master')

@section ('jobhuntcosts')

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

 			$salaryarray=array();
            $eduarray= array();
            $i=0;
            $profiles = Profile::all();
                 foreach ($profiles as $profile) {
                  	array_push($salaryarray, $profile['salrange']);
                  	//echo $profile['degree'];
                 	$eduarray = $profile['degree'];  //ok all degrees
              
                 }
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
$ttransport=0;
$tsupplies=0;
$counter=0;

$categories = 'transportation, hotel, meals, supplies, hardware, portfolio, phone, clothing, entertainment';
 
$expenses = Expense::all();
  
# loop through the Collection and access just the data
foreach($expenses as $expense) {
  
   $trimgas=trim($expense['gas']);
   $tgas=$trimgas+$tgas;
   $trimair=trim($expense['airfare']);
   $tair=$trimair+$tair;
   $trimtrain=trim($expense['train']);
   $ttrain=$trimtrain+$ttrain;
   $trimhotel=trim($expense['hotel']);
   $thotel=$trimhotel+$thotel;
   $trimmeals=trim($expense['meals']);
   $tmeals=$trimmeals+$tmeals;
   $trimstamps=trim($expense['stamps']);
   $tstamps=$trimstamps+$tstamps;
   $trimink=trim($expense['ink']);
   $tink=$trimink+$tink;
   $trimpaper=trim($expense['paper']);
   $tpaper=$trimpaper+$tpaper;
   $trimhardware=trim($expense['hardware']);
   $thardware=$trimhardware+$thardware;
   $trimportfolio=trim($expense['portfolio']);
   $tportfolio=$trimportfolio+$tportfolio;
   $trimphone=trim($expense['phone']);
   $tphone=$trimphone+$tphone;
   $trimclothing=trim($expense['clothing']);
   $tclothing=$trimclothing+$tclothing;
   $trimentertainment=trim($expense['entertainment']);
   $tentertainment=$trimentertainment+$tentertainment;
   $ttransport+=($tgas + $tair + $ttrain);
   $tsupplies+=($tstamps+$tpaper+$tink);
//also maybe divide each by a counter i as an average as these are too big and getting bigger
   $counter++;
 }
 ?>
          <script type="text/javascript">
					//alert('<?php echo $salaryarray[1]; ?>');  //this is how to wrap js around php statement. uck or insert php into js function
					//alert('hi');   // also see chart.blade for js in php in
  				</script>

<canvas id="allexpense" width="840" height="350"></canvas>
<span style="margin-left: 60px; font-size: 11px; font-weight: bold;">Gas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Airfare&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Train&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hotel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meals&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Postage&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ink&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paper&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hardware&nbsp;&nbsp;&nbsp;&nbsp;Portfolio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Clothing&nbsp;&nbsp;&nbsp;Entertain</span>





<script type="text/javascript"> 
    window.onload=function(){
          var canvas=document.getElementById('allexpense');
          var ctx=canvas.getContext('2d');
          var scores=[<?php echo $tink/$counter; ?>,<?php echo $tair/$counter; ?>, <?php echo $tmeals/$counter; ?>, <?php echo $thardware/$counter; ?>, <?php echo $tportfolio/$counter; ?>, <?php echo $tgas/$counter; ?>, <?php echo $tclothing/$counter; ?>, <?php echo $tentertainment/$counter; ?>, <?php echo $tphone/$counter; ?>, <?php echo $thotel/$counter; ?>, <?php echo $ttrain/$counter; ?>, <?php echo $tink/$counter; ?>, <?php echo $tpaper/$counter; ?>];
          var width=50;
          var currx=50;
          var base=200;

          ctx.fillStyle='#88B9EE';

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
@stop