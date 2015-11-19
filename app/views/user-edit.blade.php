
@extends('_master')

@section ('user-edit')
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


<h3>View or Edit Your Account Info</h3>
<br>
 {{ Form::model($user, array('route' => 'user.edit', $user->id)) }}    

        <!-- name -->
        {{ Form::label('first', 'First') }}
        {{ Form::text('first') }}
<br><br>
        <!-- email -->
        {{ Form::label('last', 'Last') }}
        {{ Form::text('last') }}      
<br><br>
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email') }}      
<br><br>
 {{ Form::hidden('id', $user->id) }}  <!-- just added -->
        {{ Form::submit('Update User') }}
<br><br>
    {{ Form::close() }}
<br>


<br><a class="btn btn-danger" onclick="window.history.back()">Cancel</a>

</div>
</div>

<!-- note use email as the type vs text if you want validation -->
@stop