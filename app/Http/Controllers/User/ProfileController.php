<?php

namespace App\Http\Controllers\User;

use App\Animaltype;
use App\Adoption;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $adoption = Auth::user()->adoption()->get();
        $animal = Animaltype::all();
        $user = Auth::user();
        return view('modul.user.detailprofilku',compact('user','animal','adoption'));
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
       
    }

    public function hewan($id)
    {
        $animal = Animaltype::all();
        $hewan = Adoption::findOrFail($id);
       return view('modul.user.edithewan',compact('hewan','animal'));
    }

    public function updatehewan(Request $request, $id)
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
            return redirect()->route('detailprofile.index');
        }else{
            echo "Gagal Update";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $editUser = Auth::user()->findOrFail($id);
        return view('modul.user.editprofil',compact('editUser'));
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
        $user = Auth::user()->findOrFail($id);
        $user->fill($request->except(['token','_method']))->save();
        return redirect(route('detailprofile.index'));
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
    public function deletehewan($id)
    {
        $gambar = Adoption::find($id)->image;
        // dd($gambar);
        // exit();
        File::delete('adoptionimage/' . $gambar);
        $delete_action = Adoption::where('id',$id)->delete();
        if ($delete_action){
            return redirect()->route('detailprofile.index');
        }else{
            echo "Gagal Delete";
        }
    }
}
