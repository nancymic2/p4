<b>Current state is:&nbsp;</b>
 <?php
$myid=$company->id;
$companies = Company::where('user_id', '=', Auth::user()->id)->get();
$states[]="";
$corpids[]="";
$k=0;
    foreach($companies as $company) {
   
   $states[$k] = $company->state;
   $corpids[$k] = $company->id;
   $key1 = array_search($myid, $corpids); // $key = 2;
   //$key = array_search('green', $array); // $key = 2;
    $mystate = $states[$key1];
 
    echo $mystate;
   
    $k++;
   //echo $state[]
 }
  ?>