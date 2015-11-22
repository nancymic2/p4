
@extends('_master')

@section ('company-edit')

                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
                        <script src="jquery.knob.js"></script>
                <link href="/css/layout.css" rel="stylesheet">
                <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" type="text/css" media="all" />
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js" type="text/javascript"></script>
                <script src="//code.jquery.com/jquery-1.9.1.js"></script> 
                <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                    $(document).ready(function(){
                    $('input.date').datepicker({dateFormat: 'yy-mm-dd'});
                    })
                </script>

<div class="container">
    <div class="col-sm-6">
<h2>&nbsp;</h2>
<h3>View or Edit Company</h3>

  

  <br>

 {{ Form::model($company, array('route' => 'company.edit', $company->id)) }}    
  

  <br>          <!-- email -->
        {{ Form::label('website', 'Website') }}
          <br>
        {{ Form::text('website') }} 
  <br>
        {{ Form::label('street', 'Street') }}
          <br>
        {{ Form::text('street') }}  
  <br>
        {{ Form::label('city', 'City') }}
          <br>
        {{ Form::text('city') }}  
  <br>




<br>
        {{ Form::label('phone', 'Phone') }}
          <br>
        {{ Form::text('phone') }}  
  <br>
        {{ Form::label('careersite', 'Careersite') }}
          <br>
        {{ Form::text('careersite') }}  
  <br>
        {{ Form::label('rating', 'Rating') }}
          <br>
        {{ Form::text('rating') }}  
  <br>
        {{ Form::label('username', 'Username') }}
          <br>
        {{ Form::text('username') }}  
  <br>     <!-- name -->
        {{ Form::label('pasword', 'Password') }}
          <br>
        {{ Form::text('pasword') }}
<br>
    
<br>
 {{ Form::hidden('id', $company->id) }}  <!-- just added -->
        {{ Form::submit('Update Company') }}
<br>
    {{ Form::close() }}



<br><a class="btn btn-danger" onclick="window.history.back()">Cancel</a>

</div>
</div>

<!-- note use email as the type vs text if you want validation -->
@stop