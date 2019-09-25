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
        
        $adoptionAll = Adoption::all();
        $adoption = $adoptionAll;

        $search = $request->search;
        $hewan = $request->hewan;
        $sumber = $request->sumber;
        $location = $request->lokasi;
       
        
        if ($hewan){
            $adoption = Adoption::where('id_animaltype',$hewan)->get();
        }
        if ($search){
            $adoption = Adoption::where('animal_name','like','%' . $search . '%')->orWhere('animal_kind','like','%' . $search . '%')->orWhere('lokasi','like','%' . $search . '%');
            $adoption = $adoption->get();
        }

        if($sumber){
            $adoption = $adoption->filter(function($value, $key) use ($sumber){
                return $value->asal == $sumber;
            });
        }

        if($location){
            $adoption = $adoption->filter(function($value, $key) use ($location){
                return $value->lokasi == $location;
            });
        }

        $anjing = $adoptionAll->filter(function($value, $key){
            return $value->id_animaltype == 1;
        });

        $kucing = $adoptionAll->filter(function($value, $key){
            return $value->id_animaltype == 2;
        });

        $lokasi = [];
        foreach($adoptionAll as $daerah){
            if(!in_array($daerah->lokasi, $lokasi)){
                array_push($lokasi, $daerah->lokasi);
            }
        }

        $counter = 0;
        foreach($lokasi as $l){
            $tempData = $adoptionAll->filter(function($value, $key) use ($l){
                return $value->lokasi == $l;
            });
            $lokasi[$l] = $tempData->count();
            unset($lokasi[$counter]);
            $counter++;
        }

        return view('modul.adopsi.index',compact('adoption','anjing','kucing', 'lokasi'));
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
        $adoption = Adoption::find($id)->whatsapp;
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
        $request->validate([

            'id_animaltype' => 'required',
            'animal_name' => 'required|max:255',
            'animal_kind' => 'required|max:255',
            'birth' => 'required',
            'gender' => 'required',
            'alasan' => 'required|max:255',
            'image' => 'required',
            'agresiv' => 'required|max:255',
           
           
            ]);


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
