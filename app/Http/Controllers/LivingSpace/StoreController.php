<?php

namespace App\Http\Controllers\LivingSpace;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\LivingSpace;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->create($data);
        return redirect()->route('Room.index');
    }
}
