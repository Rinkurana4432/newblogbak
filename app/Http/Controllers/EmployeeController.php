<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;
use Redirect;


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

        $employee->emp_name = $request->emp_name;
        $employee->email = $request->email;
        $employee->emp_phone = $request->emp_phone;
        $employee->emp_type = $request->emp_type;
        $employee->emp_address = $request->emp_address;
        $employee->password = Hash::make($request->password);

        $employee->save();
		
             return Redirect::back();
		}
		return view('employee.add');
	}
	


public function editEmp(Request $request){
		if ($request->isMethod('get')){
			 dd($request->all());
			
		}
		return view('employee.edit');
	}
	
}



