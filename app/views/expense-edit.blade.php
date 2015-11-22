
@extends('_master')

@section ('expense-edit')


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


<h3>View or Edit an Expense</h3>
<br>
 {{ Form::model($expense, array('route' => 'expense.edit', $expense->id)) }}    
    gasoline<br>
    {{ Form::text('gas')}} 
<br>

    airfare<br>
    {{ Form::text('airfare')}} 
<br>

    train<br>
    {{ Form::text('train')}} 
<br>
    hotel<br>
    {{ Form::text('hotel')}} 
<br>

    meals<br>
    {{ Form::text('meals')}} 
<br>

    postage<br>
    {{ Form::text('stamps')}} 
<br>

    ink<br>
    {{ Form::text('ink')}} 
<br>

    paper<br>
    {{ Form::text('paper')}} 
<br>

    hardware<br>
    {{ Form::text('hardware')}} 
<br>

    portfolio<br>
    {{ Form::text('portfolio')}} 
<br>

    phone<br>
    {{ Form::text('phone')}} 
<br>

    clothing<br>
    {{ Form::text('clothing')}} 
<br>

    entertainment<br>
    {{ Form::text('entertainment')}} 
<br>

    comments<br>
    {{ Form::textarea('comments')}} 
<br>


  <br><br>
 {{ Form::hidden('id', $expense->id) }}  <!-- just added -->
        {{ Form::submit('Update expense') }}
<br><br>
    {{ Form::close() }}



<br><a class="btn btn-danger" onclick="window.history.back()">Cancel</a>
<!-- note use email as the type vs text if you want validation -->

</div>
</div>
@stop