
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


 {{ Form::model($application, array('route' => 'application.edit', $application->id, $application->company)) }}    


<br>
    
    If you want to associate this job with another company, you must <b><u><a href="#divs" onclick='document.getElementById("companies").style.display="block";'>view your companies</a></u></b> 
    and change this ID accordingly.<br> 
    <a name="divs"></a>You may see all of your <a href="/companyreport">full company records here.</a><br>
    company ID<br>
    {{ Form::text('company')}} 
<br>
    role<br>
    {{ Form::text('role')}} 
<br>
    job name<br>
    {{ Form::text('recnumber')}} 
<br>
    hire manager<br>
    {{ Form::text('hiringMgr')}} 

  <br><br>
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