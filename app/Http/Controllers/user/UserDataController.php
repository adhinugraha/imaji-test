<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Services\UserDataService;
use Illuminate\Http\Request;

class UserDataController extends Controller
{
    protected $service;

    public function __construct(
        UserDataService $service
    )
    {
        $this->service = $service;
    }
    public function index(Request $request)
    {
        return $this->service->index($request);
    }
}
