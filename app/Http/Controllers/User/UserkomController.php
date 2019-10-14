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
        $komunitasAll = Comunity::all();
        $comunity = $komunitasAll;

        $search = $request->search;
        $hewan = $request->hewan;
        $location = $request->lokasi;
         
        if ($hewan){
            $comunity = Comunity::where('id_animaltype',$hewan)->get();
        }
        if ($search){
            $comunity = Comunity::where('name','like','%' . $search . '%')->orWhere('description','like','%' . $search . '%')->orWhere('location','like','%' . $search . '%')->orWhere('Line','like','%' . $search . '%')->orWhere('instagram','like','%' . $search . '%');
            $comunity = $comunity->get();
        }

        if($location){
            $comunity = $comunity->filter(function($value, $key) use ($location){
                return $value->id_jakartatype == $location;
            });
        }
        $anjing = $komunitasAll->filter(function($value, $key){
            return $value->id_animaltype == 1;
        });

        $kucing = $komunitasAll->filter(function($value, $key){
            return $value->id_animaltype == 2;
        });

        $semua = $komunitasAll->filter(function($value, $key){
            return $value->id_animaltype == 3;
        });

        $all = $komunitasAll->filter(function($value, $key){
            return $value->id_animaltype == 1  || 2 || 3;
        });

        $lokasi = [];
        foreach($komunitasAll as $a){
            if(isset($lokasi[$a->mywilayah->id])){
                array_push($lokasi[$a->mywilayah->id], $a->mywilayah->name);
            } else {
                $lokasi[$a->mywilayah->id] = [$a->mywilayah->name];
            }
        }
        

        return view('modul.komunitas.index',compact('comunity','anjing','kucing','semua','all','lokasi'));
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
