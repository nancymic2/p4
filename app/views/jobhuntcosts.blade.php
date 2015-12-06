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
<h2>Average annual costs per category for all  users combined</h2>

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
$counter=0; //should end up being the length of expenses so safe to use

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

<!--<canvas id="allexpense2" width="840" height="350"></canvas>-->
<span style="margin-left: 60px; font-size: 11px; font-weight: bold;">Gas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Airfare&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Train&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hotel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meals&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Postage&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ink&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paper&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hardware&nbsp;&nbsp;&nbsp;&nbsp;Portfolio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Clothing&nbsp;&nbsp;&nbsp;&nbsp;Entertain</span>


<h2 id="status"><!--0 | 0--></h2>


<script type="text/javascript"> 
    window.onload=function(){
          var canvas=document.getElementById('allexpense');
          var ctx=canvas.getContext('2d');
          var status=document.getElementById('status');
          var xlist = new Array();


/////////////////////////USED FOR COORDINATES ///////////////////////////////////////////////
         /*canvas.addEventListener('mousemove', function(event) {
                                  var mouseX = event.clientX;       
                                  var mouseY = event.clientY;
                                  status.innerHTML=parseInt(mouseX) +" | " +parseInt(mouseY);
          */
//////////////////////////////////////////UNUSED///////////////////////////////////////
                                  /*if (mouseY>parseInt((685-<?php echo $tair/$counter; ?>)) && 
                                  mouseY<parseInt((685-<?php echo $tair/$counter; ?>))+170 && mouseX>200 && mouseX<260) { 
                                      document.body.style.cursor = "pointer";
                                      alert('<?php echo $tair/$counter; ?>');
                                      document.body.style.cursor = "auto"; ////////////////////
                                  } *//////////////////////////////////////////////////////////////
                                      //alert('<?php echo $tink/$counter; ?>'); ////////////////////
                                        //alert(685-<?php echo $tair/$counter; ?>);
                                        //alert(parseInt((685-<?php echo $tair/$counter; ?>)));
//////////////////////////////////////////END UNUSED///////////////////////////////////////
                                //  }); ///USED FOR COORDINATES
           


          var costs=[<?php echo $tgas/$counter; ?>, <?php echo $tair/$counter; ?>, <?php echo $ttrain/$counter; ?>, <?php echo $thotel/$counter; ?>, <?php echo $tmeals/$counter; ?>, <?php echo $tstamps/$counter; ?>, <?php echo $tink/$counter; ?>, <?php echo $tpaper/$counter; ?>, <?php echo $thardware/$counter; ?>, <?php echo $tportfolio/$counter; ?>, <?php echo $tphone/$counter; ?>, <?php echo $tclothing/$counter; ?>, <?php echo $tentertainment/$counter; ?>];
          var width=50;
          var currx=50; ///start left i.e. X coord
          var base=200;


          //ctx.fillStyle='#88B9EE';

          for (var i=0; i<costs.length; i++) {
              var h=costs[i];  //height of bar

//make i number of new arrays here and store 4 vals of each bar and call them arrayi

//currx each time = currx + width*i + 10*i
//each time h = costs[i]
//canvas.height is a const
              ctx.fillStyle='#88B9EE';  ////
              ctx.fillRect(currx, canvas.height-h, width, h); 
              ctx.fillStyle='#000000';   ////
              ctx.font="13px Arial";
              ctx.fillText(parseInt(costs[i]), currx+18, canvas.height-h);  ///////////////////just added

 ///added 12 5 547pm

              // x, y, width, height
              currx+=width+10;

          }
          //ctx2=document.getElementById('allexpense').getContext('2d');
          ctx.beginPath();
          ctx.moveTo(20, 28);
          ctx.lineTo(20, 350);
          ctx.stroke();
          ctx.closePath(); 

          ctx.beginPath();
          ctx.moveTo(10, 48);
          ctx.lineTo(30, 48);
          ctx.stroke();
          ctx.closePath();

          ctx.beginPath();
          ctx.moveTo(10, 88);
          ctx.lineTo(30, 88);
          ctx.stroke();
          ctx.closePath();

          ctx.beginPath();
          ctx.moveTo(10, 128);
          ctx.lineTo(30, 128);
          ctx.stroke();
          ctx.closePath();

          ctx.beginPath();
          ctx.moveTo(10, 168);
          ctx.lineTo(30, 168);
          ctx.stroke();
          ctx.closePath();

          ctx.beginPath();
          ctx.moveTo(10, 208);
          ctx.lineTo(30, 208);
          ctx.stroke();
          ctx.closePath();

          ctx.beginPath();
          ctx.moveTo(10, 248);
          ctx.lineTo(30, 248);
          ctx.stroke();
          ctx.closePath();

          ctx.beginPath();
          ctx.moveTo(10, 288);
          ctx.lineTo(30, 288);
          ctx.stroke();
          ctx.closePath();

          ctx.beginPath();
          ctx.moveTo(10, 328);
          ctx.lineTo(30, 328);
          ctx.stroke();
          ctx.closePath();


//alert('<?php echo $counter; ?>');
    };
    
</script>
<h2>Based on <span style="background-color: pink;"><?php echo $counter; ?></span> users</h2>
<br><br>
</div>
</div>
@stop



