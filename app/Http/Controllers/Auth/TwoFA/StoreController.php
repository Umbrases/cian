<?php

namespace App\Http\Controllers\Auth\TwoFA;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserCode;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'code'=>'required',
        ]);

        $find = UserCode::where('user_id', auth()->user()->id)
            ->where('code', $request->code)
            ->first();

        if (!is_null($find)) {
            User::updateOrCreate(
                [ 'id' => auth()->user()->id ],
                ['phone_verified_at' => Carbon::now()]
            );
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Вы ввели неправильный код.');
    }
}
