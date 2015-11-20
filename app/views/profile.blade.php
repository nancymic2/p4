@extends('_master')

@section ('resume')

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
<h2>Add your profile information</h2>


{{ Form::open(array('url' => '/profile')) }}
<br>

State<br>
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


 <br><br>
Highest Degree<br>
<select name="degree">
	<option value="doctoral">Doctoral</option>
	<option value="masters">Masters</option>
	<option value="bachelor">Bachelor</option>
	<option value="high school">High School</option>

</select>
<br><br>

Highest Salary Range<br>
<select name="salrange">
	<option value="34">Under 40,000</option>
	<option value="46">40,000 - 60,000</option>
	<option value="68">61,000 - 80,000</option>
	<option value="810">81,000 - 100, 000</option>
	<option value="1012">101,000 - 120,000</option>
	<option value="1214">121,000 - 140,000</option>
	<option value="1416">141,000 - 160,000</option>
	<option value="1699">Over 161,000</option>

</select>

<br><br>
years of experience<br>

<select name="tenure">
	<option value="2">Under 2</option>
	<option value="4">2-4</option>
	<option value="8">5-8</option>
	<option value="12">9-12</option>
	<option value="18">12-18</option>
	<option value="25">19-25</option>
	<option value="99">Over 25</option>

</select>



<br><br>

major<br>


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
	<option value="Philosophy"></option>		
	<option value="Physics">Physics</option>		
	<option value="Political Science">Political Science</option>	
	<option value="Psychology">Psychology</option>	
</select>
<br><br>


    {{ Form::submit('Submit', array('class'=>'btn btn-default'))}}         

{{ Form::close() }}


<?php
echo '<br><a class="btn btn-danger" href="/">Cancel</a>';

?>
<br><br>
</div>
</div>
@stop