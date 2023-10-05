<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redis;

class CacheController extends Controller
{
    public function getCacheData($key)
    {
        try {
            $data = Redis::get($key);
            if ($data) {
                return response()->json(json_decode($data));
            } else {
                return response()->json(['message' => 'Cache not found'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Internal Server Error'], 500);
        }
    }

    public function storeCacheData(Request $request, $key)
    {
        $data = $request->getContent();
        Redis::set($key, $data);

        return response()->json('Cache data stored.');
    }
}