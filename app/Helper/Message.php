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
    public function unauthorized($message, $status = 401)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
        ], $status);
    }

    public function output( $data = [], $status = 200)
    {
        return response()->json([
            'success' => true,
            'data'    => $data,
        ], $status);
    }

    public function validatorError($validator, $status = 400)
    {
        return response()->json([
            'success' => false,
            'message' => $validator->errors()->first(),
        ], $status);
    }
}



?>