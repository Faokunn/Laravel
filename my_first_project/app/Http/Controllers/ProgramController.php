<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index(){
        return Program::with('chest')->get();
    }
    public function store(Request $request){
        $program = Program::create($request->all());
        if($request->has('chest')){
            $program->chest()->createMnay($request->input('chest'));
        }
        return response()-> json([$program,201]);
    }
    public function update(Request $request, $title){
        $program = Program::find($title);
        $program -> update($request -> all());
        return response()-> json(['program' => $program]);
    }
    public function destroy($title){
        $program = Program::find($title);
        $program -> chest()->delete();
        $program -> delete();
        return response()-> json(['message' => 'Program Removed']);
    }
}
