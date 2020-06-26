<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendData($data)
    {
        return $this->sendSuccess("", $data);
    }

    public function sendSuccess($message = "OK", $data=null)
    {
        return response()->json([
            "success" => true,
            "message" => $message,
            "data" => $data
        ]);
    }
    
    public function sendError($message = "Error", $errorCode = 500)
    {
        return response()->json([
            "success" => false,
            "message" => $message
        ], $errorCode);
    }
}
