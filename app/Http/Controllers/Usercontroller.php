<?php

namespace App\Http\Controllers;

use App\Helper\JWTHelper;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\View\View;

class Usercontroller extends Controller
{
    function userRegistration(Request $request)
    {
        try{
            User::create($request->input());
            return response()->json(['status' => 'success', 'message' => 'User created successfully.']);

        }
        catch(Exception $exception)
        {
            return response()->json(['status' => 'error', 'message' => $exception->getMessage()]);
        }
    }

    function login(Request $request){
        try{
          $user = User::where($request->input())->select('id')->first();
          $userID = $user->id;
          if($userID >0){

              $token =JWTHelper::CreateToken($request->input('email').$userID);

            return response()
                ->json(['status' => 'success', 'message' => 'Login successfully.'])
                ->cookie('token', $token,time()+60*60);
          }
          else{
            return response()->json(['status' => 'failed', 'message' => 'User not found.']);
          }
        }
        catch ( Exception $exception) {
            return response()->json(['status' => 'failed', 'message' => $exception->getMessage()]);

        }
    }


}
