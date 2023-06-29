<?php

namespace App\Http\Controllers\LivingSpace;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\LivingSpace;
use App\Models\Room;
use App\Models\Type;

class CreateController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $types = Type::all();
        $rooms = Room::all();
        return view('LivingSpace.create', compact('types', 'rooms'));
    }
}
