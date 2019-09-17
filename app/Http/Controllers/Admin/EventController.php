<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Animaltype;
use App\Jakartatype;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::all();
        return view('admin.modul-event.event-table',compact('event'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = Event::all();
        $animal = Animaltype::all();
        $wilayah = Jakartatype::all();
        return view('admin.modul-event.event-create',compact('event','wilayah','animal'));
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
        $file->move('eventimage', $fileName);

        $data = $request->all();
        unset($data['token']);
        $data['image'] = $fileName;

        $save = Event::create($data);

        if(!$save){
            File::delete('eventimage/'.$fileName);
        } else{
            return redirect()->route('event.index');
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
        $detailEvent = Event::findOrFail($id); 
        return view('admin.modul-event.event-detail',compact('detailEvent'));
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
        $editEvent = Event::findOrFail($id);
        return view('admin.modul-event.event-edit',compact('editEvent','animal','wilayah'));
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
        $update = $request->all();
        unset($update['_token']);
        unset($update['_method']);

        $file =  $request->file('image');
        if ($file != null){

            $fileNameArr = explode('.',$file->getClientOriginalName());
            $fileName = $fileNameArr[0] . '-' . time() . '.' . $fileNameArr[1];
            $file->move('eventimage', $fileName);

            $update['image'] = $fileName;

            $gambar = Event::find($id)->image;
            // dd($gambar);
            // exit();
            File::delete('eventimage/' . $gambar);
        }

       

        $update_action = Event::where('id',$id)->update($update);
        if ($update_action){
            return redirect()->route('event.index');
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
        $gambar = Event::find($id)->image;
        // dd($gambar);
        // exit();
        File::delete('eventimage/' . $gambar);
        $delete_action = Event::where('id',$id)->delete();
        if ($delete_action){
            return redirect()->route('event.index');
        }else{
            echo "Gagal Delete";
        }
    }
}
