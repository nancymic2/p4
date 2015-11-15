
@extends('_master')

@section ('company-edit')

 {{ Form::model($company, array('route' => 'company.edit', $company->id)) }}    

        <!-- name -->
        {{ Form::label('rating', 'Rating') }}
        {{ Form::text('rating') }}

        <!-- email -->
        {{ Form::label('website', 'Website') }}
        {{ Form::email('website') }}      

        {{ Form::submit('Update Co!') }}

    {{ Form::close() }}


</div>
</div>
@stop
