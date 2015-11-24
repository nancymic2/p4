@extends('_master')

@section ('help')

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
<h2>Help and FAQs</h2>


    <p><b>Q</b> What does it cost to join CareerTrax? <br><b>A</b> CareerTrax is free!</p>
    <p><b>Q</b> Why should I use CareerTrax?<br><b>A</b> We think you'll like CareerTrax because all of your valuable job search information is maintained
        for you right here. You can throw away your cocktail napkins, and not worry when your next hard drive with all your Excel sheets crashes and is gone forever.</p>
     <p><b>Q</b> Will you sell my personal information?<br><b>A</b> No we wiill never sell or share your information with anyone.</p>
     <p><b>Q</b> But you are showing salaries and degrees and other information on the site?<br><b>A</b> Yes but that information comes from all users and is aggregated and is not personally identifiable.</p>
     <p><b>Q</b> Why can't I add a profle?<br><b>A</b> If you are redirected to the edit profile page, 
        that means there already exists a profile for your user ID.</p>
    <p><b>Q</b> Why can't I edit my profile? <br><b>A</b> If you cannot edit your profile from the edit profile button, but are redirected to the
        add profile page, then you have not previously created a profile under your current user ID.</p>
     <p><b>Q</b> Why can't I see dates when I open my expense report CSV file in Excel?<br><b>A</b> The CSV file is formatted
      properly. You must format the date column in excel to be date.</p>

     <p><b>Q</b> Can you email me my password?<br><b>A</b> No we can't. It's encrypted and will be of no use to you anyway.<BR>
      Please use the <a href="/password/remind"><b>forgot password function</b></a>.</p>


</div>
</div>

@stop