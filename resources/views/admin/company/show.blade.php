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
                <th>Address</th>
                <th>Tel</th>
                <th>Date</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
		
		
		
		
		
               @foreach ($Company as $Company_val)
			   
            <tr>
                <td>   {!!   $Company_val->Name       !!}</td>
                <td>   {!!   $Company_val->Email       !!}</td>
                <td>   {!!   $Company_val->Address       !!}</td>
                <td>   {!!   $Company_val->Tel       !!}</td>
                <td>   {!!   $Company_val->created_at       !!}</td>
                <td>    
				
				
				   {!! Form::open(['route' => ['Companies.destroy', $Company_val->id], 'method' => 'delete']) !!}
				                       <a href="{!! route('Companies.edit', [$Company_val->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>

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