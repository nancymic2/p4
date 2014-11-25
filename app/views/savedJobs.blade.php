






{{ Form::open(array('url' => '/savedJobs')) }}

company<br>
    {{ Form::text('company') }}<br><br>


role<br>
    {{ Form::text('role') }}<br><br>



salary<br>
    {{ Form::text('salary') }}<br><br>

    Apply by (enter as yyyy-mm-dd)<br>
    {{ Form::text('applyby') }}<br><br>

    Job listing URL<br>
    {{ Form::text('url') }}<br><br>



    {{ Form::submit('Submit') }}

{{ Form::close() }}









