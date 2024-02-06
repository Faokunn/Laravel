<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //

    public function adding(Request $request){
        $Teacher = new teacher();
        $Teacher->Name = $request->Name;   
        $Teacher->age = $request->age;
        $Teacher->address = $request->address;
        $Teacher->department = $request->department;
        
        $Teacher->save();
        
        return response()->json(["ADDED TEACHER"]);
    }

    public function updating(Request $request){

        $Teacher = teacher::findorfail($request->id);
        $Teacher->Name = $request->Name;   
        $Teacher->age = $request->age;
        $Teacher->address = $request->address;
        $Teacher->department = $request->department;
        
        $Teacher->update();
        
        return response()->json(["UPDATED TEACHER"]);
    }

    public function deleting(Request $request){
        $Teachers = teacher::findorfail($request->id)->delete();

        return response()->json(["DELETED TEACHER"]);
    }

    public function viewing(){

        $Teachers = teacher::all();
        return response()->json($Teachers);
    }
}
