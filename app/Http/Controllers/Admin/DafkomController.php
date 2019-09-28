<?php

namespace App\Http\Controllers\Admin;

use App\Daftarkom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DafkomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dafkom = Daftarkom::all();
        return view('admin.modul-dafkom.dafkom-table',compact('dafkom'));
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
        $detailDafkom = Daftarkom::findOrFail($id); 
        return view('admin.modul-dafkom.dafkom-detail',compact('detailDafkom'));
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
        $delete_action = Daftarkom::where('id',$id)->delete();
        if ($delete_action){
            return redirect()->route('daftarkomunitas.index');
        }else{
            echo "Gagal Delete";
        }
    }
}
