@extends('_master')

@section ('applications')

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
        <!--</head>-->
<div class="container">
    <div class="col-sm-6">



<!--////////knob//////////// -->

<a name="companies"></a>

<h2>&nbsp;</h2>
<h2>Add a Job</h2>
<p>Add info about applications you have made.<br>
    Stop forgetting where you applied, what resume<br>
    you used, and what the username and password were<br> to the application site!</p>
  <p>  If you have an interview, add the date and get a Google calendar reminder</p>

<!-- remove rating -->
<!--<a href="#" onclick='window.open("/companysmall", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=200, left=100, width=400, height=400, menubar=0, status=0, titlebar=0, toolbar=0, nomenubar=no, status=no, titlebar=no, toolbar=no" );'>Add a company</a>-->
<a href="#companies" onclick='toggle("companyhide2", "resumehide", "companyhideDB");'><h4>1. Add the company if you have not added previously</h4></a>
 <a href="#resume" onclick='toggle("resumehide", "companyhide2",  "companyhideDB");'>
 <h4>2. Add the resume used if you have not added previously</h4></a>
 <a href="#companies" onclick='toggle("companyhideDB", "resumehide", "companyhide2");'>
 <h4>3. Add the job</h4></a>

<br><br>


<script type="text/javascript">
function toggle(adiv, bdiv, cdiv){
    diva=document.getElementById(adiv);
    divb=document.getElementById(bdiv);
    divc=document.getElementById(cdiv);
if (diva.style.display=="none") {
    diva.style.display="block";
    divb.style.display="none";
    divc.style.display="none";
}


}


</script>
  
<!--<br><a href="#resume" onclick='document.getElementById("resumehide").style.display="none"; document.getElementById("companyhideDB").style.display="block"; '>Then associate that resume with this job</a>-->
   <!-- add company<br>
    {{ Form::text('company', '', array('class'=>'form-control'))}} 
    --> <!-- commented out to remove company text box replace with select -->
<div id="companyhide2" style="display:none;">
   {{ Form::open(array('url' => '/company')) }}


<h3>Rate this company</h3><br>
 

  <input type="radio" name="rating" value="1">1 &nbsp;&nbsp;&nbsp; <input type="radio" name="rating" value="2">2&nbsp;&nbsp;&nbsp; <input type="radio" name="rating" value="3">3&nbsp;&nbsp;&nbsp; <input type="radio" name="rating" value="4">4&nbsp;&nbsp;&nbsp; <input type="radio" name="rating" value="5">5

  <br>
  
<br>
    company Name<br>
    {{ Form::text('company', '', array('class'=>'form-control'))}} 

    company career site<br>
    {{ Form::text('website', '', array('class'=>'form-control'))}} 

    career site user name<br>
    {{ Form::text('username', '', array('class'=>'form-control'))}} 

    career site password<br>
    {{ Form::text('pasword', '', array('class'=>'form-control'))}} 

    company street<br>
    {{ Form::text('street', '', array('class'=>'form-control'))}} <br>
        company city<br>
    {{ Form::text('city', '', array('class'=>'form-control'))}} <br>
 


   Company state<br>
<select name="state">
    <option value="AL">Alabama</option>
    <option value="AK">Alaska</option>
    <option value="AZ">Arizona</option>
    <option value="AR">Arkansas</option>
    <option value="CA">California</option>
    <option value="CO">Colorado</option>
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="DC">District Of Columbia</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="HI">Hawaii</option>
    <option value="ID">Idaho</option>
    <option value="IL">Illinois</option>
    <option value="IN">Indiana</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NV">Nevada</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NM">New Mexico</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="ND">North Dakota</option>
    <option value="OH">Ohio</option>
    <option value="OK">Oklahoma</option>
    <option value="OR">Oregon</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="SD">South Dakota</option>
    <option value="TN">Tennessee</option>
    <option value="TX">Texas</option>
    <option value="UT">Utah</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WA">Washington</option>
    <option value="WV">West Virginia</option>
    <option value="WI">Wisconsin</option>
    <option value="WY">Wyoming</option>
</select>
<br>
<br>
        company zip<br>
    {{ Form::text('careersite', '', array('class'=>'form-control'))}} <br>  <!-- used for zip -->
        company phone<br>
    {{ Form::text('phone', '', array('class'=>'form-control'))}} <br>

    {{ Form::submit('Create', array('class'=>'btn btn-default'))}}         

    {{ Form::close() }}


<br><br><br>
</div>
<div id="companyhideDB" style="display:none;">
{{ Form::open(array('url' => '/applications')) }}

   <h3>Rate this job prospect</h3><br>
  <input type="radio" name="rating" value="1">1 &nbsp;&nbsp;&nbsp; <input type="radio" name="rating" value="2">2&nbsp;&nbsp;&nbsp; <input type="radio" name="rating" value="3">3&nbsp;&nbsp;&nbsp; <input type="radio" name="rating" value="4">4&nbsp;&nbsp;&nbsp; <input type="radio" name="rating" value="5">5


  <br>
     <h4>Select existing company</h4>
    {{ Form::select('company_id', $company_lists) }} <!--this yieds the INDEX of the selected 11/6-->
 <!-- 11/1/15  -->

 
       
      <h4>Select existing resume</h4>
      {{ Form::select('user_id', $resume_lists) }} 

     <br>role<br>
    {{ Form::text('role', '', array('class'=>'form-control'))}} 

    salary<br>
    {{ Form::text('salary', '', array('class'=>'form-control'))}} 

    <!--Applied Date (enter as yyyy-mm-dd)<br>
    {{ Form::text('applyDate', '', array('class'=>'form-control'))}}   -->

    Applied Date <br>
     <input class="date" name="applyDate" type="text" size="10"  id="applyDate" /><br>

    City<br>
    {{ Form::text('city', '', array('class'=>'form-control'))}} 

    Hiring Manager<br>
    {{ Form::text('hiringMgr', '', array('class'=>'form-control'))}} 

    <!--Interview Date (enter as yyyy-mm-dd)<br>
    {{ Form::text('followupBy', '', array('class'=>'form-control'))}}  -->

    Interview Date <br>
     <input class="date" name="followupBy" type="text" size="10"  id="followupBy" /><br>

    decision<br>
    {{ Form::text('decision', '', array('class'=>'form-control'))}} 

    <!--Resume used<br>
    {{ Form::text('resumeUsed', '', array('class'=>'form-control'))}} -->

    address if applied by email<br>
    {{ Form::text('howapplied', '', array('class'=>'form-control'))}} 

    job name<br>
    {{ Form::text('recnumber', '', array('class'=>'form-control'))}} 

    URL of job posting<br>
    {{ Form::text('website', '', array('class'=>'form-control'))}} 

    <!-- user name<br>
    {{ Form::text('username', '', array('class'=>'form-control'))}} 

     password<br>
    {{ Form::text('password', '', array('class'=>'form-control'))}} <br> -->
<br><br>
    {{ Form::submit('Submit', array('class'=>'btn btn-default'))}}   


{{ Form::close() }}
<br><br><br>
</div>

<?php
//echo '<br><a class="btn btn-danger" href="/applications">Cancel</a> <br><br>' ;
?>

<br>
<div id="resumehide" style="display:none;">
<!--<p>Add resume text to remind you of your resume, or<br>
    add a URL to your resume on Google docs or Monster<br>
    or wheverever it is saved</p>

          {{ Form::select('user_id', $resume_lists) }}    commented out 11/17/15  811 am-->

{{ Form::open(array('url' => '/resume')) }}
<h4>Add resume information</h4>
     Give your resume a name<br>
        {{ Form::text('name', '', array('class'=>'form-control'))}} 
   Provide a link to your resume in Google Docs, DropBox, etc.<br>

        {{ Form::text('url', '', array('class'=>'form-control'))}} 
    Add notes about this resume<br>

        {{ Form::textarea('resumetext', '', array('class'=>'form-control'))}} 
  <br><br>
        {{ Form::submit('Submit', array('class'=>'btn btn-default'))}}         

{{ Form::close() }}

<br><br><br>

</div>
</div>
</div>
@stop