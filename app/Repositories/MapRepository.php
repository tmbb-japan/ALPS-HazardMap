<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;

class MapRepository 
{
    public function requestMap(){
        try {
            $response = Http::get('https://maps.googleapis.com/maps/api/js', [
                'language' => 'kr',
                'region' => 'JP',
                'key' => config('services.google.key'),
            ]);
            return $response;
        } catch (\Exception $e) {
            return null;
        }
    }
}