<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;
use Redirect;
use Session;


class EmployeeController extends Controller{
	public function index(){
			 $empal = Employee::where('role', '=', 0)->get();
			// dd($request->all());
			$data = ['empal' => $empal];
			return view('employee.index',$data);
	}
	
	
	public function addEmp(Request $request){
		if ($request->isMethod('post')){
			// dd($request->all());
		$employee = new Employee;
		if( $request->id ){
			$employee = $employee->find($request->id);
		}
		if( !$request->id ){
			$employee->email = $request->email;
			$employee->password = Hash::make($request->password);
		}
        $employee->emp_name = $request->emp_name;
        $employee->emp_phone = $request->emp_phone;
        $employee->emp_type = $request->emp_type;
        $employee->emp_address = $request->emp_address;
        $employee->save();
		
             // return Redirect::back();
			 Session::flash('message', 'Successfully updated!');
			 return redirect('employee');
		}
		return view('employee.add');
	}
	


public function editEmp($id){
	$employee = new Employee;
	$data = $employee->find($id);
	return view('employee.edit',['data' => $data ]);
	}
	


public function deleteEmp($id){
	$employee = new Employee;
	// $res=User::delete();
	$data = $employee->find($id)->delete();
	
	 Session::flash('message', 'Successfully Deleted!');
			 return redirect('employee');
	}
	
}



