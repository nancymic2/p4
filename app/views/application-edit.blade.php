
@extends('_master')

@section ('application-edit')





<h3>View or Edit Appication</h3>
<br>


 {{ Form::model($application, array('route' => 'application.edit', $application->id, $application->company)) }}    


<br>
    
    If you want to associate this job with another company, you must <b><a href="#" onclick='document.getElementById("companies").style.display="block";'>view your companies</a></b> 
    and change this ID accordingly.<br> 
    You may see all of your <a href="/companyreport">full company records here.</a><br>
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


<!-- note use email as the type vs text if you want validation -->
@stop