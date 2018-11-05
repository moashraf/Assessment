<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;
use Illuminate\Http\Request;
use App\Employee;
use App\Company;

class LoginEmployeesController extends Controller
{
   
    
	 public function register()
    {
         
  $Company =Company::all();
  return view('auth_emp/register') ->with('Company', $Company);;
 		 
  
    }
	
	   public function register_post(request $request)
    {
 				
	$validator = Validator::make($request->all(), [
            'Name' => 'required',
            'email' => 'required|regex:/(.*)@femto15\.com/i',
            'Phone' => 'required',
            'Company_id' => 'required',
			
	  'password' => 'required_with:Password_confirmation|confirmed',


          ]);
        if ($validator->fails()) {
            return \Redirect::back()  ->withErrors($validator)
                        ->withInput();
        }
		
        $input = $request->all();
	 if(isset($input['password'])){ $input['password']  = Hash::make ( $request->password );}
	$Employee = Employee::create($input);


        return redirect(route('profile'));
    }
	
	
	
    public function login_post(Request $request)
    {
    
      // Validate the form data
  
	  	$validator = Validator::make($request->all(), [
           'email'   => 'required|email',
        'password' => 'required|min:6'
          ]);
		  
		  
     if ($validator->fails()) {
            return \Redirect::back()  ->withErrors($validator)
	 ->withInput();}
	 
      // Attempt to log the user in
      if (Auth::guard('Employee')->attempt(['email' =>  $request->email , 'password' => $request->password] )) 
	  {
		 
        // if successful, then redirect to their intended location
        return redirect("/profile");
      }

      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'));
   
    }

	
	
	 public function login()
    {
           
        return view('auth_emp.login');
 
    }
	 public function profile()
    {
           
        return view('profile');
 
    }
	
}
