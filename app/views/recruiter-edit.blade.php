
@extends('_master')

@section ('recruiter-edit')


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


<h3>View or Edit Recruiter</h3>
<br>


 {{ Form::model($recruiter, array('route' => 'recruiter.edit', $recruiter->id)) }}    
    Resume  name<br>
    {{ Form::text('recruiter_name')}} 
<br>

    Resume link<br>
    {{ Form::text('recruiter_address')}} 
<br>

    notes<br>
    {{ Form::textarea('recruiter_phone')}} 


  <br><br>
 {{ Form::hidden('id', $recruiter->id) }}  <!-- just added -->
        {{ Form::submit('Update recruiter') }}
<br><br>
    {{ Form::close() }}



<br><a class="btn btn-danger" onclick="window.history.back()">Cancel</a>
<!-- note use email as the type vs text if you want validation -->

</div>
</div>
@stop