<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
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
        $update = $request->all();
        unset($update['_token']);
        unset($update['_method']);
        
        $old_password = Auth::user()->password;
        // $now_password = $request->password_sekarang;
        // $request->validate([
        //     'password' => 'required',
        //     'password_sekarang' => 'required',
        //     'confirm_password' => 'same:password',
            
        //     ]);
        //     if($old_password != $now_password){
        //         return redirect()->back();
        //     }

        // $update = $request->all();
        // $update['password'] = bcrypt($request->password); 
        // $update_action = User::where('id',$id)->update($update);
        // if ($update_action){
        //     return redirect()->route('detailprofile.index');
        // }else{
        //     echo "Gagal Update";
        // }
        dd($old_password);
    }
}
