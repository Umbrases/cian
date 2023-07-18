<?php

namespace App\Http\Controllers\House;

use App\Http\Controllers\Controller;
use App\Models\LivingSpace;

class IndexController extends Controller
{
    public function __invoke()
    {
        $livingSpaces = LivingSpace::where('type_id', 'ilike', 2)->paginate(20);
        return view('House.index', compact('livingSpaces'));
    }
}
