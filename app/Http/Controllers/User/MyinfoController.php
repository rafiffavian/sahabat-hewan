<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MyinfoController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('modul.setting.info',compact('user'));
    }

    public function update(Request $request , $id)
    {
        $user = Auth::user()->findOrFail($id);
        $user->fill($request->except(['token','_method']))->save();
        return redirect(route('myinfo.edit'));
    }
}
