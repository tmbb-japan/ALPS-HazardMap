<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MapRepository;

class MainController extends Controller
{
    protected $mapRepository;
    public function __construct(MapRepository $mapRepository) {
        $this->mapRepository = $mapRepository;
    }

    public function index()
    {
        $mapData = $this->mapRepository->requestMap();
        return view('main', ['mapData' => $mapData]);
    }
}