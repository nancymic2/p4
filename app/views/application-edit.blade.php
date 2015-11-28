
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

<h3>View or Edit Appication</h3>
<br>

<?php
    call_user_func(function() {
        $appid = Session::get('appid');
        $application  = Application::find($appid); 
        $job = json_decode($application, TRUE);

        $resumes = Resume::where('user_id', '=', Auth::user()->id)->get();
        $companies = Company::where('user_id', '=', Auth::user()->id)->get();  

        //////// GET TIME AD DATE  ////////////////
        echo '<b>Your stored interview date is:</b><br>';
        $followupBy=$job['followupBy'];
        echo  $followupBy;
        echo '<br>';
        echo '<b>Your stored interview time is:</b><br>';
        $interviewTime=$job['rating'];

        $mytime = substr($interviewTime, 0, -2);  // returns first 4 digits
        if ($mytime>1200) {
          $mytime=$mytime-1200;
          $ampm='pm';
        }
        elseif ($mytime==1200) {
          $ampm='noon';
        }
        else {
          $ampm='am';
        }
        $mytime=substr_replace($mytime, ':', -2, 0);
        echo  $mytime;
        echo ' '.$ampm;
        echo '<br>';

        echo '<b>Your stored application date is:</b><br>';
        $applyDate=$job['applyDate'];
        echo $applyDate;
        echo '<br>';
        //////// END TIME AD DATE  ////////////////
        //////// GET RESUME  ////////////////
//company is stored by id so get from companies table
        echo '<b>The resume you used for this job is:</b><br>';
        foreach($resumes as $resume) {
            if ($resume['id']==$job['resumeUsed']){
               echo $resume['name'];
            }

        }  

         //////// END RESUME  ////////////////
         //////// GET COMPANY  ////////////////
        echo '<br>';
        echo '<b>The company you stored for this job is:</b><br>';
        foreach($companies as $company) {
            if ($company['id']==$job['company']){
               echo $company['company'];
            }

        }  
        //////// END GET COMPANY  ////////////////
    });

?>



 {{ Form::model($application, array('route' => 'application.edit', $application->id, $application->company)) }}    


<br>
    
    If you want to associate this job with another company, you must <b><u><a href="#divs" onclick='document.getElementById("companies").style.display="block";'>view your companies</a></u></b> 
    and change this ID accordingly.<br> 
    <a name="divs"></a><br>
     You MUST reenter the company<br>
      <!--{{ Form::text('company', null, ['class'=>'form-control']) }} -->
    {{ Form::select('company_id', $company_lists) }} --this yieds the INDEX of the selected 11/6
 <br>
    role<br>
    {{ Form::text('role', null, ['class'=>'form-control']) }}
 <br>

    <!--resume<br>
 {{ Form::text('resumeUsed', null, ['class'=>'form-control']) }} -->
   <!--{{ Form::select('resume_id', $resume_lists) }} -->
    <!--{{ Form::text('resumeUsed')}} -->
 <br>
    salary<br>
    {{ Form::text('salary', null, ['class'=>'form-control']) }}

    <br>

interview time. You MUST reenter the time<br>
<select class="form-control" name="rating">
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


   Interview Date. Note you MUST<br> re-enter this date
     <br><input class="date" name="followupBy" type="text" size="10"  id="followupBy" /><br>

    Applied Date. Note you MUST<br> re-enter this date <br>
     <input class="date" name="applyDate" type="text" size="10"  id="applyDate" /><br>
    
    city<br>
    {{ Form::text('city', null, ['class'=>'form-control']) }}
 <br>
    hire manager<br>
    {{ Form::text('hiringMgr', null, ['class'=>'form-control']) }}

<br>
      job name<br>
    {{ Form::text('recnumber', null, ['class'=>'form-control']) }}
<br>

 {{ Form::hidden('id', $application->id) }}  <!-- just added -->
        {{ Form::submit('Update job') }}
<br><br>
    {{ Form::close() }}



<br><a class="btn btn-danger" onclick="window.history.back()">Cancel</a>

<div id="companies" style="display:none; background-color: #dddddd; position: absolute; top: 200px; width: 500px; left: 300px; z-index: 5;">
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