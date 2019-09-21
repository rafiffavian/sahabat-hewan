<?php

namespace App\Http\Controllers\User;

use App\Admin;
use App\Adoption;
use App\Animaltype;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $adoption = Adoption::all();

        $search = $request->search;
        $hewan = $request->hewan;
        
       
        
        if ($hewan){
            $adoption = Adoption::where('id_animaltype',$hewan)->get();
        }
        if ($search){
            $adoption = Adoption::where('animal_name','like','%' . $search . '%')->orWhere('animal_kind','like','%' . $search . '%')->orWhere('lokasi','like','%' . $search . '%')->get();
        }

        $anjing = $adoption->filter(function($value, $key){
            return $value->id_animaltype == 1;
        });

        $kucing = $adoption->filter(function($value, $key){
            return $value->id_animaltype == 2;
        });


        return view('modul.adopsi.index',compact('adoption','anjing','kucing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function hubungi($id)
    {
        $user = Adoption::find($id)->user;
        $data = Adoption::find($id)->asal;
        if($data == '1'){
            return redirect()->route('teman.edit',$user);
        }else{
            return redirect()->route('teman.whatsapp',$id);
        }
    }

    public function whatsapp($id)
    {
        $adoption = Adoption::find($id)->user->whatsapp;
        return redirect('https://api.whatsapp.com/send?phone='. $adoption);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file =  $request->file('image');
        $fileNameArr = explode('.',$file->getClientOriginalName());
        $fileName = $fileNameArr[0] . '-' . time() . '.' . $fileNameArr[1];
        $file->move('adoptionimage', $fileName);

        $data = $request->all();
        $data['asal'] = '1';
        $data['lokasi'] = Auth::user()->kota;
        unset($data['token']);
        $data['image'] = $fileName;

        $save = Auth::user()->adoption();
        $save->create($data);

        if(!$save){
            File::delete('adoptionimage/'.$fileName);
        } else{
            return redirect()->route('detailprofile.index');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $editAdop = Auth::user()->adoption()->findOrFail($id);
        // return view('modul.user.detailprofilku',compact('editAdop'));
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
