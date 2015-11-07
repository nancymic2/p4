@extends('_master')

@section ('applications')

                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
                        <script src="jquery.knob.js"></script>
                <link href="/css/layout.css" rel="stylesheet">
                <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" type="text/css" media="all" />
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js" type="text/javascript"></script>
                <script src="//code.jquery.com/jquery-1.9.1.js"></script> 
                <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js" type="text/javascript"></script>
<!-- datepicker was here -->
        </head>
<div class="container">
    <div class="col-sm-6">



<script>



       $(function() {

            $(".knob").knob({
                /*change : function (value) {
                    //console.log("change : " + value);
                },
                release : function (value) {
                    console.log("release : " + value);

                },
                cancel : function () {
                    console.log("cancel : " + this.value);
                },*/
                draw : function () {

                    // "tron" case
                    if(this.$.data('skin') == 'tron') {

                        var a = this.angle(this.cv)  // Angle
                            , sa = this.startAngle          // Previous start angle
                            , sat = this.startAngle         // Start angle
                            , ea                            // Previous end angle
                            , eat = sat + a                 // End angle
                            , r = true;

                        this.g.lineWidth = this.lineWidth;

                        this.o.cursor
                            && (sat = eat - 0.3)
                            && (eat = eat + 0.3);

                        if (this.o.displayPrevious) {
                            ea = this.startAngle + this.angle(this.value);
                            this.o.cursor
                                && (sa = ea - 0.3)
                                && (ea = ea + 0.3);
                            this.g.beginPath();
                            this.g.strokeStyle = this.previousColor;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                            this.g.stroke();
                        }

                        this.g.beginPath();
                        this.g.strokeStyle = r ? this.o.fgColor : this.fgColor ;
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                        this.g.stroke();

                        this.g.lineWidth = 2;
                        this.g.beginPath();
                        this.g.strokeStyle = this.o.fgColor;
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                        this.g.stroke();

                       return false;


                    }
                }

            });


            // Example of infinite knob, iPod click wheel
            var v, up=0,down=0,i=0
                ,$idir = $("div.idir")
                ,$ival = $("div.ival")
                ,incr = function() { i++; $idir.show().html("+").fadeOut(); $ival.html(i); }
                ,decr = function() { i--; $idir.show().html("-").fadeOut(); $ival.html(i); };
            $("input.infinite").knob(
                                {
                                min : 0
                                , max : 20
                                , stopper : false
                                , change : function () {
                                                if(v > this.cv){
                                                    if(up){
                                                        decr();
                                                        up=0;
                                                    }else{up=1;down=0;}
                                                } else {
                                                    if(v < this.cv){
                                                        if(down){
                                                            incr();
                                                            down=0;
                                                        }else{down=1;up=0;}
                                                    }
                                                }
                                                v = this.cv;
                                            }
                                });
        });
    </script>

<a name="companies"></a>

<h2>&nbsp;</h2>
<h2>Add a Job</h2>
<p>Add info about applications you have made.<br>
    Stop forgetting where you applied, what resume<br>
    you used, and what the username and password were<br> to the application site!</p>
  <p>  If you have an interview, add the date and get a Google calendar reminder</p>
   <!-- <h3>First rate this job prospect</h3><br>
 <input name="rating" class="knob" data-width="100" data-min="0" data-max="12"  data-displayPrevious=true 

value="44"><br>-->
<!-- remove rating -->
<!--<a href="#" onclick='window.open("/companysmall", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=200, left=100, width=400, height=400, menubar=0, status=0, titlebar=0, toolbar=0, nomenubar=no, status=no, titlebar=no, toolbar=no" );'>Add a company</a>-->
<a href="#companies" onclick='document.getElementById("companyhide2").style.display="block"; document.getElementById("companyhideDB").style.display="none"; document.getElementById("resumehideDB").style.display="none"; document.getElementById("resumehide").style.display="none";'>First: Add the company if you have not added previously</a>
<br> <a href="#resume" onclick='document.getElementById("resumehide").style.display="block"; document.getElementById("resumehideDB").style.display="none"; '>Then: Add the resume used if you have not added previously</a>
 
<br><a href="#companies" onclick='document.getElementById("companyhide2").style.display="none"; document.getElementById("resumehide").style.display="none"; document.getElementById("companyhideDB").style.display="block"; '>Then associate resume and company</a>

<br>

  
<!--<br><a href="#resume" onclick='document.getElementById("resumehide").style.display="none"; document.getElementById("companyhideDB").style.display="block"; '>Then associate that resume with this job</a>-->
   <!-- add company<br>
    {{ Form::text('company', '', array('class'=>'form-control'))}} 
    --> <!-- commented out to remove company text box replace with select -->
<div id="companyhide2" style="display:none;">
   {{ Form::open(array('url' => '/company')) }}


<h3>First rate this company</h3><br>
 <input name="rating" class="knob" data-width="100" data-min="0" data-max="12"  data-displayPrevious=true value="44"><br>


    company Name<br>
    {{ Form::text('company', '', array('class'=>'form-control'))}} 

    company website<br>
    {{ Form::text('website', '', array('class'=>'form-control'))}} 

    company user name<br>
    {{ Form::text('username', '', array('class'=>'form-control'))}} 

    company password<br>
    {{ Form::text('pasword', '', array('class'=>'form-control'))}} 

    company street<br>
    {{ Form::text('street', '', array('class'=>'form-control'))}} <br>

    {{ Form::submit('Submit', array('class'=>'btn btn-default'))}}         

    {{ Form::close() }}

</div>
<div id="companyhideDB" style="display:none;">
{{ Form::open(array('url' => '/applications')) }}
     <h4>Select existng company</h4>
     {{ Form::select('company_id', $company_lists) }} <!-- this yieds the INDEX of the selected 11/6-->
 <!-- 11/1/15  -->
       
      <h4>Select existing resume</h4>
      {{ Form::select('user_id', $resume_lists) }} 

     <br>role<br>
    {{ Form::text('role', '', array('class'=>'form-control'))}} 

    salary<br>
    {{ Form::text('salary', '', array('class'=>'form-control'))}} 

    <!--Applied Date (enter as yyyy-mm-dd)<br>
    {{ Form::text('applyDate', '', array('class'=>'form-control'))}}   -->

    Applied Date <br>
     <input class="date" name="applyDate" type="text" size="10"  id="applyDate" /><br>

    City<br>
    {{ Form::text('city', '', array('class'=>'form-control'))}} 

    Hiring Manager<br>
    {{ Form::text('hiringMgr', '', array('class'=>'form-control'))}} 

    <!--Interview Date (enter as yyyy-mm-dd)<br>
    {{ Form::text('followupBy', '', array('class'=>'form-control'))}}  -->

    Interview Date <br>
     <input class="date" name="followupBy" type="text" size="10"  id="followupBy" /><br>

    decision<br>
    {{ Form::text('decision', '', array('class'=>'form-control'))}} 

    <!--Resume used<br>
    {{ Form::text('resumeUsed', '', array('class'=>'form-control'))}} -->

    address if applied by email<br>
    {{ Form::text('howapplied', '', array('class'=>'form-control'))}} 

    rec number<br>
    {{ Form::text('recnumber', '', array('class'=>'form-control'))}} 

    URL of job posting<br>
    {{ Form::text('website', '', array('class'=>'form-control'))}} 

    <!-- user name<br>
    {{ Form::text('username', '', array('class'=>'form-control'))}} 

     password<br>
    {{ Form::text('password', '', array('class'=>'form-control'))}} <br> -->

    {{ Form::submit('Submit', array('class'=>'btn btn-default'))}}   


{{ Form::close() }}

</div>

<?php
echo '<br><a class="btn btn-danger" href="/applications">Cancel</a> <br><br>' ;
?>
</div>
<br>
<div id="resumehide" style="display:none;">
<!--<p>Add resume text to remind you of your resume, or<br>
    add a URL to your resume on Google docs or Monster<br>
    or wheverever it is saved</p>

          {{ Form::select('user_id', $resume_lists) }}    commented out 11/17/15  811 am-->

{{ Form::open(array('url' => '/resume')) }}

    
        {{ Form::text('name', '', array('class'=>'form-control'))}} 
    resume Name<br>

        {{ Form::text('url', '', array('class'=>'form-control'))}} 
    resume url<br>

        {{ Form::textarea('resumetext', '', array('class'=>'form-control'))}} <br>
    resume text<br>
        {{ Form::submit('Submit', array('class'=>'btn btn-default'))}}         

{{ Form::close() }}


<?php
echo '<br><a class="btn btn-danger" href="/applications">Cancel</a>';
?>
<div> 



</div>
</div>
                <script type="text/javascript">
                    $(document).ready(function(){
                    $('input.date').datepicker({dateFormat: 'yy-mm-dd'});
                    })
                </script>
@stop

