<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function registration(Request $request)
    {
        $name = $request->get('name');
        $address = $request->get('address');
        $phone = $request->get('phone');
        $emergency_phone = $request->get('emergency_phone');
        $password = $request->get('password');

        $user = new User();
        $user->name = $name;
        $user->address = $address;
        $user->phone = $phone;
        $user->emergency_phone = $emergency_phone;
        $user->password = $password;

        $user->save();

        return 'success';

    }
    function login(Request $request)
    {
        $phone = $request->phone;
        $password = $request->password;

        $user = User::where('phone', $phone)->where('password', $password)->first();
        if($user == null)
        {
            return 'failed';
        }
        else
        {
            return $user;
        }
    }
}
