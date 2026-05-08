<?php

namespace App\Http\Controllers\V1;

use App\Helper\Message;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    use Message;
    public function register(Request $request){

        $validator = Validator::make(
            $request->all(),
            [
                'name'      => 'required|string',
                'phone'     => 'required|max:11',
                'email'     => 'required|email|unique:users',
                'password'  => 'required|min:4',
            ]
        );

        if($validator->fails()){
            return $this->validatorError($validator);
            // return response()->json([
            //     'status' => 'false',
            //     'message' => 'validation error',
            //     'error' => $validator->errors()->all(),
            // ]);
        }

        $user = new User();
        $user->name         = $request->name;
        $user->phone        = $request->phone;
        $user->email        = $request->email;
        $user->password     = $request->password;
        $user->save();

        // return response()->json([
        //         'status' => 'true',
        //         'message' => 'Registration successfull',
        //         'data' => $request->all()
        //     ]);

        return $this->success('Registration successful',$request->all());

    }
}
