<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Employee extends Authenticatable
{
	    use Notifiable;
 // protected $guard = "Employee" ;
    public $table = 'employees';
 
    protected $fillable = [
        'Phone', 'Name', 'email', 'password'  , 'Company_id'  
    ];
  
  
   protected $hidden = [
        'password'
    ];
	
	    public function get_Company_data()
{
	 return $this->hasOne('App\Company','id','Company_id');
}


}
