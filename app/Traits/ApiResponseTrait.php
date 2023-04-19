<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponseTrait
{
    public function validationError($validator): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $validator->errors()->first(),
            'data' => []
        ], 400);
    }

    public function authNotFound($message = ""): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => []
        ], 401);
    }

    public function temporarilyBlock($message = ""): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => []
        ], 400);
    }

    public function authSuccess($token = "", $data = []): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => 'Logged in successful',
            'token' => $token,
            'profile' => $data
        ]);
    }

    public function success($message = "", $data = []): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data
        ]);
    }

    public function error($message = ""): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => []
        ], 400);
    }
}
