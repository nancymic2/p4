






{{ Form::open(array('url' => '/signup')) }}

 	First Name<br>
    {{ Form::text('first') }}<br><br>


 	Last Name<br>
    {{ Form::text('last') }}<br><br>



    Email<br>
    {{ Form::text('email') }}<br><br>

    Password:<br>
    {{ Form::password('password') }}<br><br>






    {{ Form::submit('Submit') }}

{{ Form::close() }}









