

@extends('_master')

@section ('applications')

<div class="container">
    <div class="col-sm-6">
<h2>&nbsp;</h2>
<h2>Add a completed application</h2>





{{ Form::open(array('url' => '/applications')) }}

    company<br>
    {{ Form::text('company') }}<br><br>


    role<br>
    {{ Form::text('role') }}<br><br>


    salary<br>
    {{ Form::text('salary') }}<br><br>

    Applied Date (enter as yyyy-mm-dd)<br>
    {{ Form::text('applyDate') }}<br><br>

    City<br>
    {{ Form::text('city') }}<br><br>

    Hiring Manager<br>
    {{ Form::text('hiringMgr') }}<br><br>

    Follow up by (enter as yyyy-mm-dd)<br>
    {{ Form::text('followupBy') }}<br><br>

    decision<br>
    {{ Form::text('decision') }}<br><br>

    rating<br>
    {{ Form::text('rating') }}<br><br>

    Resume used<br>
    {{ Form::text('resumeUsed') }}<br><br>

    how applied<br>
    {{ Form::text('howapplied') }}<br><br>

    rec number<br>
    {{ Form::text('recnumber') }}<br><br>

    website<br>
    {{ Form::text('website') }}<br><br>


     user name<br>
    {{ Form::text('username') }}<br><br>


     password<br>
    {{ Form::text('password') }}<br><br>



    {{ Form::submit('Submit') }}

{{ Form::close() }}

<?php
echo '<a href="/">Cancel</a> <br>';


?>

</div>
</div>
@stop




