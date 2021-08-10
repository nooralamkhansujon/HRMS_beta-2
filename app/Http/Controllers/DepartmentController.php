<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    public function index(){
         $departmentList = Department::orderBy('id','desc')->get();
         return response()->json(compact('departmentList'));
    }

    public function store(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'department_name' => 'required|string|unique:departments,department_name'
        ]);

        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()],422);
        }

        //store data 
        $department_data = [
            'department_name' => $request->input('department_name'),
            'status'          => $request->has('status')?1:0
        ];
        Department::create($department_data);
        return response()->json(['success'=>"Department Has been created successfully"]);
    }
}