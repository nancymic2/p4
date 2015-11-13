@extends('_master')

@section ('company')

<div class="container">
    <div class="col-sm-6">

////////////added 10-11-15

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

/////////////



<h2>&nbsp;</h2>
<h2>Add a Company</h2>
<p>Add a company</p>






{{ Form::open(array('url' => '/company')) }}

company Name<br>
    {{ Form::text('company', '', array('class'=>'form-control'))}} 


company website<br>
    {{ Form::text('website', '', array('class'=>'form-control'))}} 



company street<br>
    {{ Form::text('street', '', array('class'=>'form-control'))}} <br>

<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
<input name="userfile" type="file" id="userfile"> 

<input name="upload" type="submit" class="box" id="upload" value=" Upload ">

    {{ Form::submit('Submit', array('class'=>'btn btn-default'))}}         

{{ Form::close() }}


<?php
echo '<br><a class="btn btn-danger" href="/">Cancel</a>';

?>

</div>
</div>
@stop
