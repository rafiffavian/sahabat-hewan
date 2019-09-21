<?php

namespace App\Http\Controllers\User;

use App\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class CaridokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $user_data = User::where('id', $user_id)->get();
        $kecamatan = $user_data[0]->kecamatan;
        $kelurahan = $user_data[0]->kelurahan;
        $kota = $user_data[0]->kota;
        $provinsi = $user_data[0]->provinsi;
        return view('modul.pelaporan.dokter');
    }

    public function listdoctor()
    {
        $user_id = Auth::user()->id;
        $user_data = User::where('id', $user_id)->get();
        $kecamatan = $user_data[0]->kecamatan;
        $kelurahan = $user_data[0]->kelurahan;
        $kota = $user_data[0]->kota;
        $provinsi = $user_data[0]->provinsi;
        $doctor_kelurahan = Doctor::where('kelurahan',$kelurahan)->get();
        $doctor_kecamatan = Doctor::where('kecamatan',$kecamatan)->get();
        $doctor_kota = Doctor::where('kota',$kota)->get();
        return view('modul.pelaporan.listdoctor',compact('doctor_kelurahan','doctor_kecamatan','doctor_kota'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modul.pelaporan.cari-form');
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
