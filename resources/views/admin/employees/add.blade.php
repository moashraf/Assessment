@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Employee</h1>
@stop

@section('content')
   <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">add  </h3>
			              <h1 class="login-box-msg"> omly  femto15.com   email </h1>

			  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
                    {!! Form::open(['route' => 'Employee.store' ,'enctype' => 'multipart/form-data' ]) !!}
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">   Name</label>
                  <input type="text" class="form-control" name="Name" placeholder="   Name " required >
                </div>  
				<div class="form-group">
                  <label for="exampleInputEmail1">email address</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter email" required >
                </div> 




	
				<div class="form-group">
                  <label for="exampleInputEmail1">  password</label>
                  <input type="Password" class="form-control" name="password"   placeholder="Enter password" required >
                </div>
				
				<div class="form-group">
                  <label for="exampleInputEmail1"> Confirm  Password</label>
                  <input type="Password" class="form-control" name="password_confirmation"   placeholder="Confirm Password" required >
                </div>
				
				
				<div class="form-group">
                  <label for="exampleInputEmail1">  Phone</label>
                  <input type="text" class="form-control"  name="Phone"  placeholder="Enter Phone " required >
                </div>  
				
                <div class="form-group">
  <label for="sel1">Select role:</label>
  <select class="form-control" name="Company_id" required >
		
      <option value="1" >select</option>
      @foreach ($Company as $Company_val)
     <option value="{!!   $Company_val->id  !!}" > {!!   $Company_val->Name       !!} </option>
   @endforeach
          
    </select>
</div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
                    {!! Form::close() !!}
          </div>
		  
		  @stop