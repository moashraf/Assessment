<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	
	    public $table = 'company';
 
    protected $fillable = [
        'Tel', 'Address', 'Name','Email', 
    ];

     
	 public function get_Employee_data()
    {
        return $this->hasMany('App\Employee', 'Company_id');

    }
	
}
