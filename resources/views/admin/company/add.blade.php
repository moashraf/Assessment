@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
   <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">add  </h3>
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
                    {!! Form::open(['route' => 'Companies.store' ,'enctype' => 'multipart/form-data' ]) !!}
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">   Name</label>
                  <input type="text" class="form-control" name="Name" placeholder="   Name " required >
                </div>  
				<div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="Email" placeholder="Enter email" required >
                </div>  
				<div class="form-group">
                  <label for="exampleInputEmail1">  Tel</label>
                  <input type="text" class="form-control"  name="Tel"  placeholder="Enter Tel " required >
                </div>  
				<div class="form-group">
                  <label for="exampleInputEmail1">  Address</label>
                  <input type="text" class="form-control" name="Address"   placeholder="Enter Address" required >
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
                    {!! Form::close() !!}
          </div>
		  
		  @stop