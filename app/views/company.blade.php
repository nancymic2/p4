@extends('_master')

@section ('company')
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
                        <script src="jquery.knob.js"></script>
                        <script src="rater.js"></script>
                <link href="/css/layout.css" rel="stylesheet">

<div class="container">
	<div class="col-sm-6">

<!-- ////////////added 10-11-15 ////// -->

<!-- knob js -->


<h2>&nbsp;</h2>
<h2>Add a Company</h2>







{{ Form::open(array('url' => '/company')) }}


    <h3>First rate this company</h3><br>
 <input name="rating" class="knob" data-width="100" data-min="0" data-max="12"  data-displayPrevious=true 

value="44"><br>


company Name<br>
    {{ Form::text('company', '', array('class'=>'form-control'))}} 


company website<br>
    {{ Form::text('website', '', array('class'=>'form-control'))}} 



company street<br>
    {{ Form::text('street', '', array('class'=>'form-control'))}} <br>



    {{ Form::submit('Submit', array('class'=>'btn btn-default'))}}         

{{ Form::close() }}


<?php
echo '<br><a class="btn btn-danger" href="/">Cancel</a>';

?>

</div>
</div>
@stop

