<?php

namespace App\Http\Controllers;
use App\User;
use App\Company;
use Validator;

use Illuminate\Http\Request;

class CompaniesController extends Controller
{
	
	
    public function __construct()
    {
		$this->middleware('auth');
    }
	
 /*  index  */
    public function index()
    {
          
	$Company =Company::all();
    return view('admin/company/show') ->with('Company', $Company);;
 
    }

    /* Show the form for creating a new resource.   */
    public function create()
    {
	 return view('admin/company/add')  ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(request $request)
    {
		
		  /*      Companies   Validator  */	
	$validator = Validator::make($request->all(),
	[
            'Name' => 'required',
            'Email' => 'required|unique:Company',
            'Tel' => 'required',
		    'Address' => 'required', 
    ]);
	
	
        if ($validator->fails()) 
		{
            return \Redirect::back()  ->withErrors($validator)  ->withInput();
        }
		
		   /* store    Companies  Data */	

        $input = $request->all();
		$Company = Company::create($input);


        return redirect(route('Companies.index'));
    }
	
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
   $Comp  = Company::find($id);
   return view('admin/company/edit')->with('Comp', $Comp);
	
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
	   /*    update    Companies   Validator  */	

	 $validator = Validator::make($request->all(), 
	 [
            'Name' => 'required' 
     ]);
	 
        if ($validator->fails()) {
            return \Redirect::back()  ->withErrors($validator)  ->withInput();
        }
		
						  /*    update    Companies    data  */	

     $input = $request->all();
        $Company = Company::find($id);
     
     $Company =$Company->update(    $input);

 
        return redirect(route('Companies.index'));
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		
		  $Company = Company::find($id);
 

        $Company ->delete($id);
		
		
 
        return redirect(route('Companies.index'));
		
		
    }
}
