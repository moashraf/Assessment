<?php

use Illuminate\Database\Seeder;

class comp_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  
  
      $faker = Faker\Factory::create();
for($i = 0; $i < 10; $i++) {
        App\Company::create([
		
		    'Tel' =>  rand(10000000,30000000),
            'Name' => $faker->name ,
            'Address' => $faker->name ,
 		    'Email' => rand(10000000,900000000).'figoashrafe@femto15.com',
			  ]);    } 
			 
			 
           
			
    }
}
