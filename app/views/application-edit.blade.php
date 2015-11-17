
@extends('_master')

@section ('application-edit')


<div class="container">
<div class="col-sm-6">
<h2>&nbsp;</h2>


<h3>View or Edit Appication</h3>
<br>


 {{ Form::model($application, array('route' => 'application.edit', $application->id, $application->company)) }}    


<br>
    
    Note, if you want to associate with another company, you must <a href="" onclick='document.getElementById("companies").style.display="block";'>view your companies</a> 
    and change this ID accordingly.<br>
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

<?php
  $companies = Company::where('user_id', '=', Auth::user()->id)->get();
    
  echo '<div class="container">'; 
  echo '<h2>Your Companies</h2>';

  echo '<p>';
  echo '<table border="2" cellpadding="4" style="width: 100%; table-layout: fixed;"> 
    <tr>  
      <td>Company name</td>
      <td>Company ID</td>
      
      </tr>';
//# loop through the Collection and access just the data
foreach($companies as $company) {

    echo '<tr>';
    echo '<td>';
 ////
    echo $company['id'];
    echo '</td>';
    echo '<td>';
    echo $company['company'];    
    echo '</td>';
    
    echo '</tr>';

    echo '</table><table border="2" cellpadding="4" style="width: 100%; table-layout: fixed;">';
 
  }
  ?>
</div>


<!-- note use email as the type vs text if you want validation -->
@stop