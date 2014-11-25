<?php

/*	 class Buy {
    var $user_id;
    var $brand;
    var $model;
    var $color;
    var $buyprice;
 var $pic;
}
*/



class BuyBagsTableSeeder extends Seeder {
 
  public function run()
  {
 
for ($i = 0; $i < 4; $i++)
	{
		 $now = date('Y-m-d H:i:s');

	$buybags = Buybag::create(array(
	   
	    'created_at' => $now,
	    'updated_at' => $now,
	   // 'user_id' => $i,
	    'brand' => 'louis vuitton',
	    'model' => 'hollywood',
	    'color' => 'red',
	    'buyprice' => '500',
	    'pic' => 'http://nancymichell.us/redBag.jpg'
	    

	  ));
	}
  }
 
}
