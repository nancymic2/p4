
@extends('_master')

@section ('company-edit')

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
<h3>View or Edit Company</h3>

 {{ Form::model($company, array('route' => 'company.edit', $company->id)) }}    

        {{ Form::label('company', 'Company') }}
          <br>
        {{ Form::text('company') }}  
  <br>          <!-- email -->
        {{ Form::label('website', 'Website') }}
          <br>
        {{ Form::text('website') }} 
  <br>
        {{ Form::label('street', 'Street') }}
          <br>
        {{ Form::text('street') }}  
  <br>
        {{ Form::label('city', 'City') }}
          <br>
        {{ Form::text('city') }}  
  <br>

  current state is
  <br>

 <?php
$myid=$company->id;
$companies = Company::where('user_id', '=', Auth::user()->id)->get();
$states[]="";
$corpid[]="";
$k=0;
    foreach($companies as $company) {
   $k++;
   $states[$k] = $company->state;
   $corpid[$k] = $company->id;
   $key1 = array_search($myid, $corpid); // $key = 2;

   //$key = array_search('green', $array); // $key = 2;
    $mystate = array_search($states, $key1);
    echo $mystate;
   //echo $state[]
 }



  ?>
  <b>company state</b><br>
<select name="state">
    <option value="AL"> </option>
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
        {{ Form::label('phone', 'Phone') }}
          <br>
        {{ Form::text('phone') }}  
  <br>
        {{ Form::label('careersite', 'Careersite') }}
          <br>
        {{ Form::text('careersite') }}  
  <br>
        {{ Form::label('rating', 'Rating') }}
          <br>
        {{ Form::text('rating') }}  
  <br>
        {{ Form::label('username', 'Username') }}
          <br>
        {{ Form::text('username') }}  
  <br>     <!-- name -->
        {{ Form::label('pasword', 'Password') }}
          <br>
        {{ Form::text('pasword') }}
<br>
    
<br>
 {{ Form::hidden('id', $company->id) }}  <!-- just added -->
        {{ Form::submit('Update Company') }}
<br>
    {{ Form::close() }}



<br><a class="btn btn-danger" onclick="window.history.back()">Cancel</a>

</div>
</div>

<!-- note use email as the type vs text if you want validation -->
@stop