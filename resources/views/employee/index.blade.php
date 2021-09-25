@extends('layouts.indexapp')

@section('datatableLinks')
	   <x-datatablelink />
@endsection

@section('content')


@if($empal)
	  <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Employee</h3>
              </div>
			  <div class="card-footer">
                  <a href="{{url('addemployee')}}" class="btn btn-primary">Add</a>
                </div>
              <!-- /.card-header -->
				<div class="card-body">
				 <table id="example2" class="table table-bordered table-hover">
							  <thead>
							  <tr>
								<th>S.no</th>
								<th>Name</th>
								<th>Phone</th>
								<th>Email</th>
								<th>Action</th>
							  </tr>
							  </thead>
							  <tbody>
							  
								@foreach($empal as $value)
								
							
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $value->emp_name }}</td>
										<td>{{ $value->emp_phone }}</td>
										<td>{{ $value->email }}</td>
										<td><a class="btn btn-primary" href="{{ url('editemployee',$value->id) }}">Edit</a></td>
									</tr>
								
								
								
								@endforeach
								</tbody>
							</table>
						</div>	
					</div>	
				</div>	
			</div>	
@endif











@endsection
@section('datatableScripts')
	   <x-datatablescript />
	   <script>
		  $(function () {
			$("#example1").DataTable({
			  "responsive": true, "lengthChange": false, "autoWidth": false,
			  "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
			}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
			$('#example2').DataTable({
			  "paging": true,
			  "lengthChange": false,
			  "searching": false,
			  "ordering": true,
			  "info": true,
			  "autoWidth": false,
			  "responsive": true,
			});
		  });
	</script>
@endsection