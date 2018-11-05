<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
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
        App\Employee::create([
		
			'Phone' =>  rand(10000000,30000000),
            'Name' => $faker->name ,
            'Company_id' =>1,
		    'Email' => rand(1000000,9000000).'figoashrafe@femto15.com',
            'Password' => Hash::make('Mhthel'),
			  ]);    } 
			 
			 
           
			
    }
}
