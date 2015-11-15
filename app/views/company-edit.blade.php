
@extends('_master')

@section ('company-edit')
<h3>Edit Company</h3>
<br>
 {{ Form::model($company, array('route' => 'company.edit', $company->id)) }}    

        <!-- name -->
        {{ Form::label('rating', 'Rating') }}
        {{ Form::text('rating') }}
<br><br>
        <!-- email -->
        {{ Form::label('website', 'Website') }}
        {{ Form::email('website') }}      

        {{ Form::submit('Update Co!') }}

    {{ Form::close() }}
<br><br>

</div>
</div>
@stop
