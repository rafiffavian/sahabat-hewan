<?php

namespace App\Http\Controllers\Admin;

use App\Animaltype;
use App\Comunity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jakartatype;
use Illuminate\Support\Facades\File;

class ComunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comunity = Comunity::all();
        return view('admin.modul-komunitas.komunitas-table',compact('comunity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $animal = Animaltype::all();
        $wilayah = Jakartatype::all();
        return view('admin.modul-komunitas.komunitas-create',compact('animal','wilayah'));
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
            'id_animaltype' => 'required|max:255',
            'name' => 'required|max:255',
            'location' => 'required|max:255',
            'description' => 'required|max:255',
            'image' => 'required|max:255',
            'id_jakartatype' => 'required|max:255',
            'instagram' => 'required|max:255',
            'whatsapp' => 'required|max:255',
            'Line' => 'required|max:255',
            'url_lokasi' => 'required|max:255',
            
            ]);

        $file =  $request->file('image');
        $fileNameArr = explode('.',$file->getClientOriginalName());
        $fileName = $fileNameArr[0] . '-' . time() . '.' . $fileNameArr[1];
        $file->move('comunityimage', $fileName);

        $data = $request->all();
        unset($data['token']);
        $data['image'] = $fileName;

        $save = Comunity::create($data);

        if(!$save){
            File::delete('comunityimage/'.$fileName);
        } else{
            return redirect()->route('comunity.index');
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
        $detailComunity = Comunity::findOrFail($id); 
        return view('admin.modul-komunitas.komunitas-detail',compact('detailComunity'));
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
        $wilayah = Jakartatype::all();
        $editComunity = Comunity::findOrFail($id);
        return view('admin.modul-komunitas.komunitas-edit',compact('editComunity','animal','wilayah'));
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
            'id_animaltype' => 'required|max:255',
            'name' => 'required|max:255',
            'location' => 'required|max:255',
            'description' => 'required|max:255',
            'image' => 'required|max:255',
            'id_jakartatype' => 'required|max:255',
            'instagram' => 'required|max:255',
            'whatsapp' => 'required|max:255',
            'Line' => 'required|max:255',
            'url_lokasi' => 'required|max:255',
            
            ]);
        // dd($request->all());
        $update = $request->all();
        unset($update['_token']);
        unset($update['_method']);

        $file =  $request->file('image');
        if ($file != null){

            $fileNameArr = explode('.',$file->getClientOriginalName());
            $fileName = $fileNameArr[0] . '-' . time() . '.' . $fileNameArr[1];
            $file->move('comunityimage', $fileName);

            $update['image'] = $fileName;

            $gambar = Comunity::find($id)->image;
            // dd($gambar);
            // exit();
            File::delete('comunityimage/' . $gambar);
        }

       

        $update_action = Comunity::where('id',$id)->update($update);
        if ($update_action){
            return redirect()->route('comunity.index');
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
        $gambar = Comunity::find($id)->image;
        // dd($gambar);
        // exit();
        File::delete('comunityimage/' . $gambar);
        $delete_action = Comunity::where('id',$id)->delete();
        if ($delete_action){
            return redirect()->route('comunity.index');
        }else{
            echo "Gagal Delete";
        }
    }
}
