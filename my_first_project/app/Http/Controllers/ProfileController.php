<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index(){
        $profile = Profile::all();
        return response() -> json(['profiles' => $profile]);
    }
    public function store(Request $request){
        
    }
    public function update(Request $request, $id){

    }
    public function destroy($id){

    }
}
