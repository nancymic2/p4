



Route::get('companyreport', array('before' => 'auth', function()
  {      
////////////////

$stylesend='</body></html>';


  $companies = Company::where('user_id', '=', Auth::user()->id)->get();
  
  include 'head.php';
  echo '<div class="container">'; 
  echo '<h2>Your Companies</h2>';

  echo '<p>';
  echo '<table id="myTable2" class="tablesorter" border="2" cellpadding="4" style="width: 100%; table-layout: fixed;"> 

  <caption>
  Sort Your Companies by field
  </caption>
  <thead>
    <tr>  
      <th style="width: 9.09%;">Company name</th>
      <th style="width: 9.09%;">Company ID</th>
      <th style="width: 9.09%;">Career site</th>
      <th style="width: 9.09%;">Career site user name</th>
      
      <th style="width: 9.09%;">Career site password</th>

      <th style="width: 9.09%;">Company street</th>
      <th style="width: 9.09%;">Company city</th>
      <th style="width: 9.09%;">Company state</th>
      <th style="width: 9.09%;">Company zip</th>
      <th style="width: 9.09%;">Company phone</th>
      <th style="width: 9.09%;">Your rating</th>
      </tr>  </thead>   <tbody>';
//# loop through the Collection and access just the data
foreach($companies as $company) {

    echo '<tr>';
    echo '<td>';
    echo $company['Company'];

    echo '</td>';
    echo '<td>';
    echo $company['id'];    
    echo '</td>';
    echo '<td>';
    echo $company['website'];
    echo '</td>';
    echo '<td>';
    echo $company['username'];
    echo '</td>';
    echo '<td>';

    echo $company['password'];
    echo '</td>';
    echo '<td>';

    echo $company['street'];
    echo '</td>';
    echo '<td>';

    echo $company['city'];
    echo '</td>';
    echo '<td>';

    echo $company['state'];
    echo '</td>';

    echo '<td>';

    echo $company['careersite']; //use for zip
   
    echo '</td>';
    echo '<td>';
    echo $company['phone'];
    echo '</td>';
    echo '<td>';
    echo $company['rating'];
    echo '</td>';
     
    echo '</tr>';

    echo '<script> var apldata = "<php echo $app_id[$i]; ?>" </script>';


  }
    echo '<br>';
    echo '</tbody> </table>';
    echo '</div>';

   

//return View::make('deleteresume')->with('deleteres', $deleteres);
echo '</p>';
echo '<br><br>';
 echo $stylesend;   
}));
