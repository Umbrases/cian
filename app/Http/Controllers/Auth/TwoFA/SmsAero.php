<?php

namespace App\Http\Controllers\Auth\TwoFA;

use App\Models\UserCode;

class SmsAero
{

    public static function generateCode()
    {
        $code = rand(1000, 9999);

        UserCode::updateOrCreate(
            [ 'user_id' => auth()->user()->id ],
            [ 'code' => $code ]
        );

    }


}
