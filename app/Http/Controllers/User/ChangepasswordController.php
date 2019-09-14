<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ChangepasswordController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('modul.setting.gantipassword',compact('user'));
    }
    public function update(Request $request, $id)
    {

    
    }
}
