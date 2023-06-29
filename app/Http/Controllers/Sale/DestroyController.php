<?php

namespace App\Http\Controllers\Sale;

use App\Http\Controllers\Sale\BaseController;
use App\Models\LivingSpace;

class DestroyController extends BaseController
{
    public function __invoke(LivingSpace $livingSpace)
    {
        $livingSpace->delete();
        return redirect()->route('/');
    }
}
