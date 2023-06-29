<?php

namespace App\Http\Controllers\Sale;

use App\Http\Controllers\Controller;
use App\Services\Flat\Service;

class BaseController extends Controller
{
    public $service;
    public function __construct(Service $service){
        $this->service = $service;
    }
}
