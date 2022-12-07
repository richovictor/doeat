<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function notice()
    {
        return view("VerifEmailFirst");
    }
    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return redirect('login');
    }
}