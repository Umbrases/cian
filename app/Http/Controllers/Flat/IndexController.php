<?php

namespace App\Http\Controllers\Flat;

use App\Http\Controllers\Controller;
use App\Models\LivingSpace;

class IndexController extends Controller
{
    public function __invoke()
    {
        $livingSpaces = LivingSpace::where('type_id', 'ilike', 1)->paginate(20);
        return view('Flat.index', compact('livingSpaces'));
    }
}
