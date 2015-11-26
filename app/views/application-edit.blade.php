
@extends('_master')

@section ('application-edit')


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


<h3>View or Edit Appication</h3>
<br>
<b>Current date is:&nbsp;</b>
 <?php
call_user_func(function() {
//$mynewdate= 'route' -> ('application.edit', $application->id);
  //$interviewDate = Session::get('currentintdate');
    $application=0;
    

    $myid=0;
    $applications = Application::where('user_id', '=', Auth::user()->id)->get();
    $dates[]="";
    $dates2[]="";
    $dateids[]="";
    $mydate="";
    $mydate2="";
    $k=0;
        foreach($applications as $application) {
       
           $dates[$k] = $application->followupBy;
           $dates2[$k] = $application->applyDate;

           $dateids[$k] = $application->id;
           $key1 = array_search($myid, $dateids); // $key = 2;
           //$key = array_search('green', $array); // $key = 2;
            $mydate = $dates[$key1];
            $mydate2 = $dates2[$key1];
           
            $k++;
           //echo $state[]
       }
    echo $mydate;
    echo '<br>';
    echo $mydate2;
   // echo $interviewDate;
    //echo $id;

    //$curintdate=$application->'followupBy';
    //echo $curintdate;

});
?>



 {{ Form::model($application, array('route' => 'application.edit', $application->id, $application->company)) }}    


<br>
    
    <!--If you want to associate this job with another company, you must <b><u><a href="#divs" onclick='document.getElementById("companies").style.display="block";'>view your companies</a></u></b> 
    and change this ID accordingly.<br> -->
    <a name="divs"></a><br>
     You MUST reenter the company
    {{ Form::select('company_id', $company_lists) }} <!--this yieds the INDEX of the selected 11/6-->
<br> <br>
    role<br>
    {{ Form::text('role')}} 
<br> <br>
    resume<br>
    {{ Form::text('resumeUsed')}} 
<br> <br>
    salary<br>
    {{ Form::text('salary')}} 

    <br> <br>

interview time<br>
<select name="rating">
  <option value="000000">12:00 am</option>
  <option value="010000">1:00 am</option>
  <option value="020000">2:00 am</option>
  <option value="030000">3:00 am</option>
  <option value="040000">4:00 am</option>
  <option value="050000">5:00 am</option>
  <option value="060000">6:00 am</option>
  <option value="070000">7:00 am</option>
  <option value="080000">8:00 am</option>
  <option value="090000">9:00 am</option>
  <option value="100000">10:00 am</option>
  <option value="110000">11:00 am</option>
  <option value="120000">12:00 pm</option>
  <option value="130000">1:00 pm</option>
  <option value="140000">2:00 pm</option>
  <option value="150000">3:00 pm</option>
  <option value="160000">4:00 pm</option>
  <option value="170000">5:00 pm</option>
  <option value="180000">6:00 pm</option>
  <option value="190000">7:00 pm</option>
  <option value="200000">8:00 pm</option>
  <option value="210000">9:00 pm</option>
  <option value="220000">10:00 pm</option>
  <option value="230000">11:00 pm</option>
</select>
<br><br>


   Interview Date. Note you MUST<br> re-enter this date<br> <a href="/completedapps"><b><u>Check your stored dates</u></b></a> <br>
     <br><input class="date" name="followupBy" type="text" size="10"  id="followupBy" /><br>
<br>
    Applied Date. Note you MUST<br> re-enter this date <br>
     <input class="date" name="applyDate" type="text" size="10"  id="applyDate" /><br>
    
<br>
    
    city<br>
    {{ Form::text('city')}} 
<br> <br>


    hire manager<br>
    {{ Form::text('hiringMgr')}} 

  <br> <br>
      job name<br>
    {{ Form::text('recnumber')}} 
<br>
<br>
 {{ Form::hidden('id', $application->id) }}  <!-- just added -->
        {{ Form::submit('Update job') }}
<br><br>
    {{ Form::close() }}



<br><a class="btn btn-danger" onclick="window.history.back()">Cancel</a>

<div id="companies" style="display:none; position: absolute; top: 200px; left: 200px; z-index: 5;">
<b><a href="#" onclick='document.getElementById("companies").style.display="none";'>Close</a></b> 
   <br>
<?php
  $companies = Company::where('user_id', '=', Auth::user()->id)->get();
    
  echo '<div class="container">'; 


  echo '<p>';
  echo '<table border="2" cellpadding="4" style="width: 40%; table-layout: fixed;">';

   

   echo '<tr>  
      <td bgcolor="#eeeeee"><b>Company ID</b></td>
      <td bgcolor="#eeeeee"><b>Company name</b></td>
      <td bgcolor="#eeeeee"><b>Company ID</b></td>
      <td bgcolor="#eeeeee"><b>Company name</b></td>
         
      </tr><tr>';
      $i=2;
//# loop through the Collection and access just the data
foreach($companies as $company) {
$i++;

    echo '<td>';
 ////
    echo $company['id'];
    echo '</td>';
    echo '<td>';
    echo $company['company'];    
    echo '</td>';
    if ($i%2==0) {
        echo '</tr><tr>';
    }

 
  }
      echo '</table><br><br>';
  ?>
</div>
</div>
</div>
</div>

<!-- note use email as the type vs text if you want validation -->
@stop