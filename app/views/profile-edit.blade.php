
@extends('_master')

@section ('profile-edit')


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



<h3>View or Edit Profile</h3>
<b>Current values:</b><br>
<?php
  $profiles = Profile::where('user_id', '=', Auth::user()->id)->get();

   # loop through the Collection and access just the data
    foreach($profiles as $profile) {
        echo '<b>Degree - </b>';
        echo $profile['degree'];
        echo '<br>';
        echo '<b>Major - </b>';
        echo $profile['major'];
        echo '<br>';
        echo '<b>Experience - </b>';
        echo $profile['tenure'];
        echo '<br>';
                echo '<b>Industry - </b>';
        echo $profile['industry'];
        echo '<br>';
                echo '<b>Salary - </b>';
        echo $profile['salrange'];
        echo '<br>';
                echo '<b>US State - </b>';
        echo $profile['state'];
        echo '<br>';
}

?>
<b>Change values below. Be sure to select a value for every parameter; otherwise the defaults wi be stored:</b>

<br>
 {{ Form::model($profile, array('route' => 'profile.edit', $profile->id)) }}    
    Degree<br>
<select name="degree">
    <option value="doctoral">Doctoral</option>
    <option value="masters">Masters</option>
    <option value="bachelor">Bachelor</option>
    <option value="high school">High School</option>

</select>
<br>

    Concentration<br>
<select name="major">
    <option value="Actuarial Science">Actuarial Science</option>    
    <option value="Anthropology">Anthropology</option>      
    <option value="Art">Art</option>        
    <option value="Biochemistry">Biochemistry</option>      
    <option value="Biological Sciences">Biological Sciences</option>        
    <option value="Chemistry">Chemistry</option>    
    <option value="Chemical Engineering">Chemical Engineering</option>      
    <option value="Computer Engineering">Computer Engineering</option>      
    <option value="Computer Science">Computer Science</option>      
    <option value="Electrical Engineering">Electrical Engineering</option>      
    <option value="Classics">Classics</option>      
    <option value="Communication">Communications</option>       
    <option value="Earth Science">Earth Science</option>        
    <option value="Economics">Economics</option>        
    <option value="English">English</option>        
    <option value="Environmental Studies">Environmental Studies</option>        
    <option value="History">History</option>        
    <option value="Mathematics">Mathematics</option>        
    <option value="Pharmacology">Pharmacology</option>      
    <option value="Philosophy">Philosophy</option>        
    <option value="Physics">Physics</option>        
    <option value="Political Science">Political Science</option>    
    <option value="Psychology">Psychology</option>  
</select>
<br>

    Years of exp<br>
<select name="tenure">
    <option value="2">Under 2</option>
    <option value="4">2-4</option>
    <option value="8">5-8</option>
    <option value="12">9-12</option>
    <option value="18">12-18</option>
    <option value="25">19-25</option>
    <option value="99">Over 25</option>

</select><br>

    industry<br>
<select name="industry">
    <option value="Actuarial Science">Actuarial</option>    
    <option value="Art">Art</option>        
    <option value="med">Medical</option>        
    <option value="Biological Sciences">Biology</option>        
    <option value="Chemistry">Chemistry</option>    
    <option value="Chemical Engineering">Nursing</option>       
    <option value="Computer Engineering">Computer Engineering</option>      
    <option value="Computer Science">Computer Science</option>      
    <option value="Electrical Engineering">Electrical Engineering</option>      
    <option value="Classics">Classics</option>      
    <option value="Communication">Communications</option>       
    <option value="Earth Science">Earth Science</option>        
    <option value="Economics">Economics</option>        
    <option value="English">English</option>        
    <option value="Environmental Studies">Environmental Studies</option>        
    <option value="History">History</option>        
    <option value="Mathematics">Mathematics</option>        
    <option value="Pharmacology">Pharmacology</option>      
    <option value="Philosophy">Philospohy</option>        
    <option value="Physics">Physics</option>        
    <option value="Political Science">Political Science</option>    
    <option value="Psychology">Psychology</option>  
</select>
<br>
    salary<br>
<select name="salrange">
    <option value="40">Under 40,000</option>
    <option value="50">40,000 - 60,000</option>
    <option value="70">61,000 - 80,000</option>
    <option value="90">81,000 - 100, 000</option>
    <option value="120">101,000 - 120,000</option>
    <option value="130">121,000 - 140,000</option>
    <option value="150">141,000 - 160,000</option>
    <option value="161">Over 161,000</option>

</select>
<br>
    state<br>
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


  <br><br>
 {{ Form::hidden('id', $profile->id) }}  <!-- just added -->
        {{ Form::submit('Update profile') }}
<br><br>
    {{ Form::close() }}



<br><a class="btn btn-danger" onclick="window.history.back()">Cancel</a>
<!-- note use email as the type vs text if you want validation -->
<br><br>
</div>
</div>
@stop