<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class MainController extends Controller
{
    public function index()
    {
        $apiKey = config('services.google.key');
        return view('main', ['apiKey' => $apiKey]);
    }
}