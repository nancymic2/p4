
@extends('_master')

@section ('company-edit')


<div class="container">
<div class="col-sm-6">
<h2>&nbsp;</h2>


<h3>Edit Company</h3>
<br>
 {{ Form::model($company, array('route' => 'company.edit', $company->id)) }}    

        <!-- name -->
        {{ Form::label('rating', 'Rating') }}
        {{ Form::text('rating') }}
<br><br>
        <!-- email -->
        {{ Form::label('website', 'Website') }}
        {{ Form::text('website') }}      
<br><br>
        {{ Form::submit('Update Company') }}
<br><br>
    {{ Form::close() }}
<br>

<?php
echo '<br><a class="btn btn-danger" href="/">Cancel</a>';

?>

</div>
</div>

<!-- note use email as the type vs text if you want validation -->
@stop