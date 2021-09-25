@extends('layouts.indexapp')

@section('content')

<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Add Employee</h3>
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
                        <input type="text" class="form-control" name="emp_name" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="email" >
                      </div>
                    </div>
                  </div>
				   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" placeholder="Enter ..." name="emp_phone">
                      </div>
                    </div>
					 <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Enter ..." name="password">
                      </div>
                    </div>
                  
                    <div class="col-sm-6">
                      <!-- Select multiple-->
                      <div class="form-group">
                        <label>Employee Type</label>
                        <select class="form-control" name="emp_type">
                          <option value="">Select</option>
                          <option value="1">PHP</option>
                          <option value="2">Andriod</option>
                          <option value="3">iOS</option>
                        </select>
                      </div>
                    </div>
         
               
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="emp_address"></textarea>
                      </div>
                    </div>
                 
						<button type="submit" class="btn btn-primary">Submit</button>
					
                </form>
              </div>
              <!-- /.card-body -->
            </div>

@endsection

