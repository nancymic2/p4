@extends('_master')

@section ('applications')

                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
                        <script src="jquery.knob.js"></script>
                <link href="/css/layout.css" rel="stylesheet">
</head>
<div class='layout-document'>



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



<div class="container">
    <div class="col-sm-6">
<h2>&nbsp;</h2>
<h2>Add a Job</h2>
<p>Add info about applications you have made.<br>
    Stop forgetting where you applied, what resume<br>
    you used, and what the username and password were<br> to the application site!</p>
  <p>  If you have an interview, add the date and get a Google calendar reminder</p>




{{ Form::open(array('url' => '/applications')) }}

    <h3>First rate this job prospect</h3><br>
 <input name="rating" class="knob" data-width="100" data-min="0" data-max="12"  data-displayPrevious=true 

value="44"><br>

    company<br>
    {{ Form::text('company', '', array('class'=>'form-control'))}} 


    role<br>
    {{ Form::text('role', '', array('class'=>'form-control'))}} 


    salary<br>
    {{ Form::text('salary', '', array('class'=>'form-control'))}} 

    Applied Date (enter as yyyy-mm-dd)<br>
    {{ Form::text('applyDate', '', array('class'=>'form-control'))}} 

    City<br>
    {{ Form::text('city', '', array('class'=>'form-control'))}} 

    Hiring Manager<br>
    {{ Form::text('hiringMgr', '', array('class'=>'form-control'))}} 

    Interview Date (enter as yyyy-mm-dd)<br>
    {{ Form::text('followupBy', '', array('class'=>'form-control'))}} 

    decision<br>
    {{ Form::text('decision', '', array('class'=>'form-control'))}} 


    Resume used<br>
    {{ Form::text('resumeUsed', '', array('class'=>'form-control'))}} 

    how applied<br>
    {{ Form::text('howapplied', '', array('class'=>'form-control'))}} 

    rec number<br>
    {{ Form::text('recnumber', '', array('class'=>'form-control'))}} 

    website<br>
    {{ Form::text('website', '', array('class'=>'form-control'))}} 


     user name<br>
    {{ Form::text('username', '', array('class'=>'form-control'))}} 

     password<br>
    {{ Form::text('password', '', array('class'=>'form-control'))}} <br>


    {{ Form::submit('Submit', array('class'=>'btn btn-default'))}}   


{{ Form::close() }}

<?php
echo '<br><a class="btn btn-danger" href="/">Cancel</a>';


?>

</div>
</div>
</div>
@stop



