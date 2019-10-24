<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\SendEmail;
use App\User;
use Illuminate\Support\Facades\Mail as IlluminateMail;
use Mail;
use Sentinel;
use Reminder;

class ForgotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modul.signinup.forgotpassword');
    }
   
    public function password(Request $request)
    {
        
        $user = User::whereEmail($request->email)->first();
        if($user == null){
            return redirect()->back()->with(['error' => 'Email Tidak Ada']);
        }
        $new_password = str_random(30);
        // $user->password = bcrypt($new_password);
        // $user->save();
        session(['email' => $request->email, 'password' => $new_password]);
        $nama = $user->username;
        Mail::to($user)->send(new SendEmail($new_password,$nama, $user->id));
        return redirect()->route('login.index')->with(['success' => 'Cek Email Anda.']);
        // return redirect()->route('login.index');

        
    }

    public function requestPassword(Request $request) {
        $user = User::whereEmail($request->email)->first();
        $key = str_random(30);
        session(['key' => $key]);
        Mail::to($user)->send(new SendEmail($key, $user->id));
        return redirect()->route('login.index')->with(['success' => 'Cek Email Anda.']);

    }

    public function resetPassword($key, $id) {
        // $user = User::find($id);
        return view('modul.signinup.password', compact('key', 'id'));
    }

    public function reset(Request $request) {
        $id = $request['id'];
        $user = User::find($id);
        $password = $request['password'];
        $user->password = bcrypt($password);
        $user->save();
        return redirect('/')->with(['success' => 'password telah diubah']);
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
