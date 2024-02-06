<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function adding(Request $request){
        $Student = new student();
        $Student->Name = $request->Name;   
        $Student->age = $request->age;
        $Student->address = $request->address;
        $Student->course = $request->course;
        $Student->subject = $request->subject;
        
        $Student->save();
        
        return response()->json(["ADDED STUDENT"]);
    }

    public function updating(Request $request){

        $Student = student::findorfail($request->id);
        $Student->Name = $request->Name;   
        $Student->age = $request->age;
        $Student->address = $request->address;
        $Student->course = $request->course;
        $Student->subject = $request->subject;
        
        $Student->update();
        
        return response()->json(["UPDATED STUDENT"]);
    }

    public function deleting(Request $request){
        $Student = student::findorfail($request->id)->delete();

        return response()->json(["DELETED STUDENT"]);
    }

    public function viewing(){

        $Student = student::all();
        return response()->json($Student);
    }
}
