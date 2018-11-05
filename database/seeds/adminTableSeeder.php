<?php

use Illuminate\Database\Seeder;

class adminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  
    DB::table('users')->insert([
            'name' => str_random(10),
            'email' =>  'ashraf@femto15.com',
			'password' => Hash::make('Mhthel'),
	]);
	 
			 
			 
           
			
    }
}
