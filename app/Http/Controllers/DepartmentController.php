<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
class DepartmentController extends Controller
{
    public function index(){
         $departmentList = Department::orderBy('id','desc')->get();
         return response()->json(compact('departmentList'));
    }

    public function show($id){
        $department = Department::find($id);
        if(!$department){
           return response()->json(['error'=>"Department Doesn't exists"],404);
        }
        return response()->json(compact('department'));
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

    public function update(Request $request,$id){
        $department = Department::find($id);
        if(!$department){
           return response()->json(['error'=>"Department Doesn't exists"],404);
        }
        $validator = Validator::make($request->all(),[
            'id'              => 'required',
            'department_name' => ['required','string',Rule::unique('departments')->ignore($id)]
        ]);

        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()],422);
        }

        //store data
        $department_data = [
            'department_name' => $request->input('department_name'),
            'status'          => $request->has('status')?1:0
        ];
        $department->update($department_data);

        return response()->json(['success'=>"Department has been updated successfully"]);

    }

    public function destroy($id){
        $department = Department::find($id);
        if(!$department){
           return response()->json(['error'=>"Department Doesn't exists"],404);
        }
        $department->delete();
        return response()->json(['success'=>"Department has been Deleted Successfully"],200);
    }
}