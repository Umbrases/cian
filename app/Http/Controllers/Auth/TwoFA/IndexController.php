<?php

namespace App\Http\Controllers\Auth\TwoFA;

use App\Http\Controllers\Controller;
use App\Models\UserCode;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('dashboard');
    }
}
