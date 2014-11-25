<?php
 
class UserTableSeeder extends Seeder {
 
  public function run()
  {
$now = date('Y-m-d H:i:s');
  	$user = User::create(array(
                  'created_at' => $now,
                'updated_at' => $now,
  'first' => 'Nancy',
  'last' => 'Michell',
  'email' => 'nanmichell@gmail.com',
  'password' => 'nancy'

));

$faker = Faker\Factory::create();
 
for ($i = 0; $i < 10; $i++)
{
	 $now = date('Y-m-d H:i:s');
  $user = User::create(array(
   // 'username' => $faker->userName,
  	                 'created_at' => $now,
               'updated_at' => $now,
    'first' => $faker->firstName,
    'last' => $faker->lastName,
    'email' => $faker->email,
    'password' => $faker->word
  ));
}


  
  }
 
}
