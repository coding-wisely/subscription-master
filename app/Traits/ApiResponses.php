<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponses
{
    public function error($message, $code = 500): JsonResponse
    {
        return response()->json([
            'status' => $code,
            'message' => $message
        ], $code);
    }
    public function ok($message, $data = null, $code = 200): JsonResponse
    {
        return response()->json([
            'status' => $code,
            'message' => $message,
            'data' => $data
        ], $code);
    }
}
