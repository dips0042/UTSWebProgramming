<?php

namespace App\Http\Controllers;

use App\Models\AppUser;
use Illuminate\Http\Request;

class AppUserController extends Controller
{
    //
    public function gold() {
        $appusers = AppUser::all();
        return view('homepage-gold', compact('appusers'));
    }

    public function green() {
        $appusers = AppUser::all();
        return view('homepage-green', compact('appusers'));
    }
}
