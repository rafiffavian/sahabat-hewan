<?php

namespace App\Http\Controllers\Admin;

use App\Adoption;
use App\Animaltype;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class DopsiadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adoption = Adoption::all();
        return view('admin.modul-adopsi.adopsi-table',compact('adoption'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $animal = Animaltype::all();
        return view('admin.modul-adopsi.adopsi-create',compact('animal'));
    }

    public function grafik()
    {

        $adoptionAll = Adoption::all();

        $user = $adoptionAll->filter(function($value, $key){
            return $value->asal == 1;
        });

        $komunitas = $adoptionAll->filter(function($value, $key){
            return $value->asal == 2;
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

        if(count($user) > 0){
           $user_komunitas['user'] = count($user); 
        }

        if(count($komunitas) > 0){
            $user_komunitas['komunitas'] = count($komunitas); 
         }

        return view('admin.modul-adopsi.adopsi-grafik',compact('user_komunitas','lokasi'));
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
            'asal' => 'required',
            'lokasi' => 'required|max:255',
           
            ]);


        $file =  $request->file('image');
        $fileNameArr = explode('.',$file->getClientOriginalName());
        $fileName = $fileNameArr[0] . '-' . time() . '.' . $fileNameArr[1];
        $file->move('adoptionimage', $fileName);

        $data = $request->all();
        unset($data['token']);
        $data['image'] = $fileName;

        $user = Auth::user()->adoption();
        $save = $user->create($data);

        if(!$save){
            File::delete('adoptionimage/'.$fileName);
        } else{
            return redirect()->route('dopsiadmin.index');
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
        $animal = Animaltype::all();
        $editAdoption = Adoption::findOrFail($id);
        return view('admin.modul-adopsi.adopsi-edit',compact('editAdoption','animal'));
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
        $request->validate([

            'id_animaltype' => 'required',
            'animal_name' => 'required|max:255',
            'animal_kind' => 'required|max:255',
            'birth' => 'required',
            'gender' => 'required',
            'alasan' => 'required|max:255',
            'image' => 'required',
            'agresiv' => 'required|max:255',
            'asal' => 'required',
            'lokasi' => 'required|max:255',
           
            ]);

        $update = $request->all();
        unset($update['_token']);
        unset($update['_method']);

        $file =  $request->file('image');
        if ($file != null){

            $fileNameArr = explode('.',$file->getClientOriginalName());
            $fileName = $fileNameArr[0] . '-' . time() . '.' . $fileNameArr[1];
            $file->move('adoptionimage', $fileName);

            $update['image'] = $fileName;

            $gambar = Adoption::find($id)->image;
            // dd($gambar);
            // exit();
            File::delete('adoptionimage/' . $gambar);
        }

       

        $update_action = Adoption::where('id',$id)->update($update);
        if ($update_action){
            return redirect()->route('dopsiadmin.index');
        }else{
            echo "Gagal Update";
        }
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
