<?php

namespace App\Http\Controllers\User;

use App\Animaltype;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Katpelaporan;
use App\Report;
use Illuminate\Support\Facades\Auth;

class PelaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animal = Animaltype::all();
        $katPelaporan = Katpelaporan::all();
        return view('modul.pelaporan.komunitas',compact('animal','katPelaporan'));
    }

    public function fileUpload(Request $request){
        $file = $request->file('file');
        $file->move('remortimage', $file->getClientOriginalName());
        return response()->json($file->getClientOriginalName());
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
        $data = $request->all();
        $data['status'] = '2';
        $gambar = $data['gambar'];
        $gambarExplode = explode(',', $gambar);

        if(isset($gambarExplode[0])){
            $data['image_one'] = $gambarExplode[0];
        }
        if(isset($gambarExplode[1])){
            $data['image_two'] = $gambarExplode[1];
        }
        if(isset($gambarExplode[2])){
            $data['image_three'] = $gambarExplode[2];
        }
        if(isset($gambarExplode[3])){
            $data['image_four'] = $gambarExplode[3];
        }
        if(isset($gambarExplode[4])){
            $data['image_five'] = $gambarExplode[4];
        }

        unset($data['_token']);
        unset($data['gambar']);

        $admin = Auth::user()->report();
        $saveAdmin = $admin->create($data);
        if($saveAdmin){
            return response()->json($data);
        } else {
            return 'false';
        }
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
