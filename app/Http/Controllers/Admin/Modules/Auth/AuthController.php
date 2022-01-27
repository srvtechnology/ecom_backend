<?php

namespace App\Http\Controllers\Admin\Modules\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class AuthController extends Controller
{
	public function access()
	{
		header('Access-Control-Allow-Origin:  http://localhost:3000');
		header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Authorization, Origin');
		header('Access-Control-Allow-Methods:  POST, PUT');
	}

    public function register(Request $request)
    {
  		$this->access();
    	$ins=new User;
    	$ins->name = $request->back_name;
    	$ins->email = $request->back_email;
    	$ins->password = $request->back_password;
    	$ins->save();
    	$token = $ins->createToken('LaravelAuthApp')->accessToken;
    	return response()->json(['msg'=>'inserted']);
 	}



	public function login(Request $request)
	{
		$this->access();
		$data = [
            'email' => $request->email,
            'password' => $request->password
        ];
 
        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }	
	}










}
