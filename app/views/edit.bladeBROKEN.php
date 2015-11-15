
@extends('_master')

@section ('edit')

<div class="container">
    <div class="col-sm-6">


{{ Form::open(array('url' => 'company/edit')) }}

        {{ Form::label('rating', 'Rating') }}
        {{ Form::text('rating', $company->rating) }}
<br><br>
        <!-- email -->
        {{ Form::label('website', 'Website') }}
        {{ Form::text('website', $company->website) }}      
<br><br>
 {{ Form::hidden('id', $company->id) }}  <!-- just added -->
        {{ Form::submit('Update Company') }}
<br><br>
    	{{ Form::close() }}


<br><a class="btn btn-danger" onclick="window.history.back()">Cancel</a>


</div>
</div>
@stop
