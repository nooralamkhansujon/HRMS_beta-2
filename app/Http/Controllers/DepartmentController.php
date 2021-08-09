<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index(){
         $departmentList = Department::orderBy('id','desc')->get();
         return response()->json(compact('departmentList'));
    }
}