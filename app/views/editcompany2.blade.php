
@extends('_master')

@section ('editcompany2')

<div class="container">
    <div class="col-sm-6">


@foreach ($companies as $company)
{{{$company->rating}}}
@endforeach

<?php
echo '<br><a class="btn btn-danger" href="/">Cancel</a>';

?>


</div>
</div>
@stop
