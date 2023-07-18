<?php

namespace App\Http\Controllers\Auth\TwoFA;

use App\Http\Controllers\Controller;
use App\Models\UserCode;
use SmsAero\SmsAeroMessage;

class ResendController extends Controller
{
    public function __invoke()
    {
        $a = new SmsAero();
        $a->generateCode();
        $codeUser = UserCode::where('user_id', auth()->user()->id)->first();

        $smsAeroMessage = new SmsAeroMessage('login', 'key');
        $smsAeroMessage->send(['number' => auth()->user()->phone, 'text' => 'Ваш код для подтверждения ' . $codeUser['code'], 'sign' => 'SMS Aero']);
        $smsAeroMessage->getList();

        return back()->with('success', 'Мы отправили вам код на номер вашего мобильного телефона');
    }
}
