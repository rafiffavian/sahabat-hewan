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

    public function graphic()
    {

        $eventAll = Event::all();

        $anjing = $eventAll->filter(function($value, $key){
            return $value->id_animaltype == 1;
        });

        $kucing = $eventAll->filter(function($value, $key){
            return $value->id_animaltype == 2;
        });

        $semua = $eventAll->filter(function($value, $key){
            return $value->id_animaltype == 3;
        });

        $lokasi = [];
        foreach($eventAll as $a){
            if(isset($lokasi[$a->mywilayah->id])){
                array_push($lokasi[$a->mywilayah->id], $a->mywilayah->name);
            } else {
                $lokasi[$a->mywilayah->id] = [$a->mywilayah->name];
            }
        }
        return view('admin.modul-event.event-grafik',compact('anjing','kucing','semua','lokasi'));
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

        $request->validate([

            'id_animaltype' => 'required|max:255',
            'name' => 'required|max:255',
            'price' => 'required|max:255',
            'location' => 'required|max:255',
            'description' => 'required|max:255',
            'image' => 'required',
            'time' => 'required|max:255',
            'time_finish' => 'required|max:255',
            'id_jakartatype' => 'required|max:255',
            'instagram' => 'required|max:255',
            'whatsapp' => 'required|max:255',
            'line' => 'required|max:255',
            'url_lokasi' => 'required',
            
            ]);

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

        $request->validate([

            'id_animaltype' => 'required|max:255',
            'name' => 'required|max:255',
            'price' => 'required|max:255',
            'location' => 'required|max:255',
            'description' => 'required|max:255',
            'image' => 'required',
            'time' => 'required|max:255',
            'time_finish' => 'required|max:255',
            'id_jakartatype' => 'required|max:255',
            'instagram' => 'required|max:255',
            'whatsapp' => 'required|max:255',
            'line' => 'required|max:255',
            'url_lokasi' => 'required',
            
            ]);


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
