<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class SettingsController extends Controller
{
    public function accountRead()
    {
        return view('settings.info');
    }
}
