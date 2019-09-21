<?php

namespace App\Http\Controllers\User;

use App\Comunity;
use App\Daftarkom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserkomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $comunity = Comunity::all();

        $search = $request->search;
        $hewan = $request->hewan;

        if ($hewan){
            $comunity = Comunity::where('id_animaltype',$hewan)->get();
        }
        if ($search){
            $comunity = Comunity::where('name','like','%' . $search . '%')->orWhere('description','like','%' . $search . '%')->orWhere('location','like','%' . $search . '%')->get();
        }

        $anjing = $comunity->filter(function($value, $key){
            return $value->id_animaltype == 1;
        });

        $kucing = $comunity->filter(function($value, $key){
            return $value->id_animaltype == 2;
        });

        $all = $comunity->filter(function($value, $key){
            return $value->id_animaltype == 1  || 2 || 3;
        });

      


        return view('modul.komunitas.index',compact('comunity','anjing','kucing','all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('modul.komunitas.daftarkomunitas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comunity = Auth::user()->daftarkom();
        $comunity->create($request->except('_token'));
        return redirect(route('komunitas.index'));
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
