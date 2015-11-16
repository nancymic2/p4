@extends('_master')

@section ('expenses')

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
<h2>Add expenses</h2>

{{ Form::open(array('url' => '/expenses')) }}
<br>
 <h5>Date of expense</h5>
     <input class="date" name="exp_date" type="text" size="10"  id="exp_date" /><br>


 <h5>Add expense to one of your companies</h5>

  <!--   {{ Form::select('company_id', $company1_lists) }}  working. try below -->

       {{ Form::select('company_id', [null => 'none'] + $company1_lists) }}
<br>

<!--company_id<br>
    {{ Form::text('company_id', '', array('class'=>'form-control'))}} -->
 <h5>Add expense to one of your jobs</h5>
    <!--{{ Form::text('application_id', '', array('class'=>'form-control'))}}  add select instead -->

     {{ Form::select('recnumber', $application_lists) }}
<br>
<h4>Add expenses for:</h4>
gasoline<br>
    {{ Form::text('gas', '', array('class'=>'form-control'))}} 
airfare<br>
    {{ Form::text('airfare', '', array('class'=>'form-control'))}} 
train<br>
    {{ Form::text('train', '', array('class'=>'form-control'))}} 
hotel<br>
    {{ Form::text('hotel', '', array('class'=>'form-control'))}} 
meals<br>
    {{ Form::text('meals', '', array('class'=>'form-control'))}}
stamps<br>
    {{ Form::text('stamps', '', array('class'=>'form-control'))}}
ink<br>
    {{ Form::text('ink', '', array('class'=>'form-control'))}}
paper<br>
    {{ Form::text('paper', '', array('class'=>'form-control'))}}
hardware<br>
    {{ Form::text('hardware', '', array('class'=>'form-control'))}}
portfolio<br>
    {{ Form::text('portfolio', '', array('class'=>'form-control'))}}
phone<br>
    {{ Form::text('phone', '', array('class'=>'form-control'))}}
clothing<br>
    {{ Form::text('clothing', '', array('class'=>'form-control'))}}
entertainment<br>
    {{ Form::text('entertainment', '', array('class'=>'form-control'))}}
comments<br>
    {{ Form::textarea('comments', '', array('class'=>'form-control'))}}


<br>
{{ Form::submit('Submit', array('class'=>'btn btn-default'))}}         

{{ Form::close() }}


<?php
echo '<br><a class="btn btn-danger" href="/expenses">Cancel</a>';

?>

</div>
</div>
@stop
