<?php

namespace App\Http\Controllers;
use App\Employee;
use Validator;
use Hash;
use Auth;
use App\Company;
use Illuminate\Http\Request;

class  employeesController extends Controller
{
	
   public function __construct()
    {
  $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           
      $Employee =Employee::with('get_Company_data')->get();
	  return view('admin/employees/show') ->with('Employee', $Employee);;
 
    }
	
	
	

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		  $Company =Company::all();
  return view('admin/employees/add') ->with('Company', $Company);;
 	
 			
 			
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(request $request)
    {
		
				
	$validator = Validator::make($request->all(), [
            'Name' => 'required',
            'email' => 'required|regex:/(.*)@femto15\.com/i',
            'Phone' => 'required',
			'password' => 'required_with:Password_confirmation|confirmed',


          ]);
        if ($validator->fails()) {
            return \Redirect::back()  ->withErrors($validator)
                        ->withInput();
        }
		
        $input = $request->all();
	 if(isset($input['password'])){ $input['password']  = Hash::make ( $request->password );}
	$Employee = Employee::create($input);


        return redirect(route('Employee.index'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
   $Employee  = Employee::find($id);
         return view('admin/employees/edit')->with('Employee', $Employee);
	
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     $input = $request->all();
	 
	 if(isset($input['password'])){ $input['password']  = Hash::make ( $request->password );}
	 		

			 
        $Employee = Employee::find($id);
     
     $Employee =$Employee->update($input);

 
        return redirect(route('Employee.index'));
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		
		  $Employee = Employee::find($id);
 

        $Employee ->delete($id);
		
		
 
        return redirect(route('Employee.index'));
		
		
    }
}
