@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
				<th>company</th>
                <th>Date</th>
               
                <th>action</th>
            </tr>
        </thead>
        <tbody>
		
		@foreach ($Employee as $Employee_val)
			   
            <tr>
                <td>   {!!   $Employee_val->Name       !!}</td>
                <td>   {!!   $Employee_val->email       !!}</td>
                <td>   {!!   $Employee_val->Phone       !!}</td>
				  <td>   {!!   $Employee_val->get_Company_data['Name']       !!}</td>

                <td>   {!!   $Employee_val->created_at       !!}</td>
                <td>    
				
				
				   {!! Form::open(['route' => ['Employee.destroy', $Employee_val->id], 'method' => 'delete']) !!}
				                       <a href="{!! route('Employee.edit', [$Employee_val->id]) !!}" class='btn btn-default btn-xs'>
									   <i class="glyphicon glyphicon-edit"></i></a>

                <div class='btn-group'>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', 
					['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 
					'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
				
				</td>
				  </tr>
            @endforeach
          
           
		   
		   
		   
		   
		   
        </tbody>
       
    </table>
	
	@stop