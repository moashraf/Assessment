@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Employee edit </h1>
@stop

@section('content')
   <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">edit  </h3>
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
   {!! Form::model($Employee, ['route' => ['Employee.update', $Employee->id], 'method' => 'patch' ]) !!}

 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">   Name</label>
                  <input type="text" class="form-control" name="Name" placeholder="   Name " required  
				  value="<?php if(isset(   $Employee )){echo "   $Employee->Name";} ?>">
                </div>  
				<div class="form-group">
                  <label for="exampleInputEmail1">email address</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter email" required 
				   value="<?php if(isset(   $Employee )){echo "   $Employee->email";} ?>">
                </div>  
				<div class="form-group">
                  <label for="exampleInputEmail1">  Phone</label>
                  <input type="text" class="form-control"  name="Phone"  placeholder="Enter Phone " required
 value="<?php if(isset(   $Employee )){echo "   $Employee->Phone";} ?>"				  >
                </div>  
				
				 
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
                    {!! Form::close() !!}
          </div>
		  
		  @stop