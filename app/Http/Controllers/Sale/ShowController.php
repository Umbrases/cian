<?php

namespace App\Http\Controllers\Sale;

use App\Http\Controllers\Controller;
use App\Models\LivingSpace;

class ShowController extends Controller
{
    public function __invoke(LivingSpace $livingSpace)
    {
        return view('Sale.show', compact('livingSpace'));
    }
}
