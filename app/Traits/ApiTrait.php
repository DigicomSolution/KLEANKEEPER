<?php

namespace App\Traits;

trait ApiTrait
{
    public function sendResponse($result, $message=null){
        $response = ['status' => 'success', 'data' => $result, 'message'=>$message];
        print_r(json_encode($response));
        return response()->json($response);
    }

    public function sendError($error, $errorMessages = [], $code = 404){
        $response = ['status' => 'error', 'error'=>$code, 'message' => $error];
        print_r(json_encode($response));
        return response()->json($response);
    }
}