<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // testing UserController with POSTMAN API
    // function register() {
    //     return "Hello World";
    // }

    // Testing to see if the user will return JSON data with POSTMAN API
    // function register(Request $request) {
    //     return $request -> input();
    // }

    function register(Request $request) {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        return $user;
    }
}
