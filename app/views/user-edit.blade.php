
@extends('_master')

@section ('user-edit')


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