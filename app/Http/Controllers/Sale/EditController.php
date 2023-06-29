<?php

namespace App\Http\Controllers\Sale;

use App\Http\Controllers\Controller;
use App\Models\LivingSpace;

class EditController extends Controller
{
    public function __invoke(LivingSpace $livingSpace)
    {
        return view('Sale.edit', compact('livingSpace'));
    }
}
