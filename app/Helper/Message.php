<?php

namespace App\Helper;

trait Message
{
    public function success($message, $data = [], $status = 200)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data'    => $data,
        ], $status);
    }

    public function validatorError($validator, $status = 400){
        // return $validator->errors()->first();
        return response()->json([
            'success' => false,
            'message' => $validator->errors()->first(),
        ], $status);
    }
}



?>