<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use App\Models\LivingSpace;

class IndexController extends Controller
{
    public function __invoke()
    {
        $livingSpaces = LivingSpace::where('type_id', 'ilike', 3)->paginate(20);
        return view('Room.index', compact('livingSpaces'));
    }
}
