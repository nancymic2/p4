
@extends('_master')

@section ('editoldcompany')

<div class="container">
    <div class="col-sm-6">



Form::model($company, array('route' => array('editcompany', $company->id)))

company Name<br>
    {{ Form::text('company', '', array('class'=>'form-control'))}} 


company website<br>
    {{ Form::text('website', '', array('class'=>'form-control'))}} 



company street<br>
    {{ Form::text('street', '', array('class'=>'form-control'))}} <br>



    {{ Form::submit('Submit', array('class'=>'btn btn-default'))}}         

{{ Form::close() }}



<?php
echo '<br><a class="btn btn-danger" href="/">Cancel</a>';

?>


</div>
</div>
@stop
