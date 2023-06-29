<?php

namespace App\Http\Controllers\House;

use App\Http\Controllers\Controller;
use App\Models\LivingSpace;

class IndexController extends Controller
{
    public function __invoke()
    {
        $livingSpaces = LivingSpace::all();
        return view('House.index', compact('livingSpaces'));
    }
}
