@extends('layouts.indexapp')

@section('content')

<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Employee</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
				
				
			  
                <form action="{{url('addemployee')}}" method="POST">
					@csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Name</label>
						<input type="hidden" class="form-control" name="id" value="{{$data->id}}">
                        <input type="text" class="form-control" name="emp_name" placeholder="Enter ..." value="{{$data->emp_name}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="email" value="{{$data->email}}" readonly>
                      </div>
                    </div>
                  </div>
				   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="emp_phone" value="{{$data->emp_phone}}">
                      </div>
                    </div>
					 <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Enter ..." name="password" >
                      </div>
                    </div>
                  
                    <div class="col-sm-6">
                      <!-- Select multiple-->
                      <div class="form-group">
                        <label>Employee Type</label>
                        <select class="form-control" name="emp_type" >
                          <option value="">Select</option>
                          <option value="1" @if($data->emp_type == 1)selected @endif >PHP</option>
                          <option value="2" @if($data->emp_type == 2)selected @endif >Andriod</option>
                          <option value="3" @if($data->emp_type == 3)selected @endif >iOS</option>
                        </select>
                      </div>
                    </div>
         
               
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="emp_address" >{{$data->emp_address}}</textarea>
                      </div>
                    </div>
                 
						<button type="submit" class="btn btn-primary">Submit</button>
					
                </form>
              </div>
              <!-- /.card-body -->
            </div>

@endsection

