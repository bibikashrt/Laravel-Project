<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login():string{
    return "test login";
    }

 

public function register(Request $request)
{

    $request->validate([
        'name' => 'required',
        'email'=> 'required|email',
        'password'=> 'required',
    ]);


    $existinguser = User::where('email',$request->email)->exists();

    if($existinguser){
        throw ValidationException::withMessages([
            'email'=> 'Email already in use',
        ]);
    }

    User::create(attributes: $request->all());
    return response()->json([
        'message'=> 'user created successfully!',
    ]);

}
    //This function is for logging out the user
public function logout(Request $request){
    
}
}
