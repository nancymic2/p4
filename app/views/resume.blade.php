






{{ Form::open(array('url' => '/resume')) }}

resume Name<br>
    {{ Form::text('name') }}<br><br>


resume url<br>
    {{ Form::text('url') }}<br><br>



resume text<br>
    {{ Form::textarea('resumetext') }}<br><br>



    {{ Form::submit('Submit') }}

{{ Form::close() }}


<?php
 echo '<a href="welcome">Cancel</a> <br>';





