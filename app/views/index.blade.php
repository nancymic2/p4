	
@extends('_master')

@section ('index')

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
                <script>
     $(document).ready(function()
      { 

          buttons=document.getElementsByClassName("clickdiv");
          for(var i=0;i<buttons.length;i++){

              buttons[i].addEventListener('click', gothere, false);
              buttons[i].style.cursor="pointer";
          }
      
      } 
      );

     function gothere(){

        this.style.backgroundColor="#5EFB6E";
        window.location=this.dataset.link;
     }
      </script>

<!--<div class="container" style="background-image: url('home.jpg'); margin-top: -40px; width: 100%; background-repeat: no-repeat;">-->
<div class="container">
<!--     <div class="col-sm-6">  -->

<div style="width: 100%"><h2>Welcome to CareerTrax!</h2>
<p>test credentials: user test@test.com, password: testtest</p>
<p>To see some data, try user: 4@5.com,  password: 123456
<p>CareerTrax lets you keep track of 
   your job appplications, job listings, contacts, resumes, expenses, and all te information you collect when searching for a job.</li>
  
</p>
</div><br>
<div class="clickdiv" data-link= "completedapps"; style="border: 1px solid gray; background-color: #C3B6D7; margin: 40px; width: 150px; height: 150px; float: left; box-shadow: 10px 10px 5px #888888;"> </div>
<div class="clickdiv" style="border: 1px solid gray; background-color: #A2B2CD; margin: 40px; width: 150px; height: 150px; float: left; box-shadow: 10px 10px 5px #888888;"></div>
    <div class="clickdiv" style="border: 1px solid gray; background-color: #A2C7CD; margin: 40px; width: 150px; height: 150px; float: left; box-shadow: 10px 10px 5px #888888;"></div>
        <div class="clickdiv" style="border: 1px solid gray; background-color: #DCDEE9; margin: 40px; width: 150px; height: 150px; float: left; box-shadow: 10px 10px 5px #888888;"></div>
    




</div>

@stop