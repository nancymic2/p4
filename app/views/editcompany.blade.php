
@extends('_master')

@section ('editcompany')

<div class="container">
    <div class="col-sm-6">



<!--  {{ Form::model($company, array('route' => array('editcompany', $company->id))) }} -->


{{ Form::model($company) }}



company Name<br>
    {{ Form::text('username', '', array('class'=>'form-control'))}} 


company website<br>
    {{ Form::text('website', '', array('class'=>'form-control'))}} 



company street<br>
    {{ Form::text('street', '', array('class'=>'form-control'))}} <br>



    {{ Form::submit('Submit', array('class'=>'btn btn-default'))}}         

{{ Form::close() }}



<br><a class="btn btn-danger" onclick="window.history.back()">Cancel</a>


</div>
</div>
@stop
