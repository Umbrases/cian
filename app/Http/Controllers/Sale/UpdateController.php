<?php

namespace App\Http\Controllers\Sale;

use App\Http\Controllers\Sale\BaseController;
use App\Http\Requests\UpdateRequest;
use App\Models\LivingSpace;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, LivingSpace $livingSpace)
    {
        $data = $request->validated();
        dd($request->title);
        $this->service->update($livingSpace, $data);
        return redirect()->route('sale.show', $livingSpace->id);
    }
}
