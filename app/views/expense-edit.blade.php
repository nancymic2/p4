
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
    {{ Form::text('gas', null, ['class'=>'form-control']) }}
<br>

    airfare<br>
    {{ Form::text('airfare', null, ['class'=>'form-control']) }}
<br>

    train<br>
    {{ Form::text('train', null, ['class'=>'form-control']) }}
<br>
    hotel<br>
    {{ Form::text('hotel', null, ['class'=>'form-control']) }}
<br>

    meals<br>
    {{ Form::text('meals', null, ['class'=>'form-control']) }}
<br>

    postage<br>
    {{ Form::text('stamps', null, ['class'=>'form-control']) }}
<br>

    ink<br>
    {{ Form::text('ink', null, ['class'=>'form-control']) }}
<br>

    paper<br>
    {{ Form::text('paper', null, ['class'=>'form-control']) }}
<br>

    hardware<br>
    {{ Form::text('hardware', null, ['class'=>'form-control']) }}
<br>

    portfolio<br>
    {{ Form::text('portfolio', null, ['class'=>'form-control']) }}
<br>

    phone<br>
    {{ Form::text('phone', null, ['class'=>'form-control']) }}
<br>

    clothing<br>
    {{ Form::text('clothing', null, ['class'=>'form-control']) }}
<br>

    entertainment<br>
    {{ Form::text('entertainment', null, ['class'=>'form-control']) }}
<br>

    comments<br>
    {{ Form::textarea('comments', null, ['class'=>'form-control']) }}
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