<?php

namespace App\Http\Controllers\User;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsereventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $eventAll = Event::all();
        $event = $eventAll;

        $search = $request->search;
        $hewan = $request->hewan;
        $location = $request->lokasi;
        
       
        
        if ($hewan){
            $event = Event::where('id_animaltype',$hewan)->get();
        }
        if ($search){
            $event = Event::where('name','like','%' . $search . '%')->orWhere('description','like','%' . $search . '%')->orWhere('location','like','%' . $search . '%');
            $event->get();
        }

        if($location){
            $event = $event->filter(function($value, $key) use ($location){
                return $value->id_jakartatype == $location;
            });
        }
        $anjing = $eventAll->filter(function($value, $key){
            return $value->id_animaltype == 1;
        });

        $kucing = $eventAll->filter(function($value, $key){
            return $value->id_animaltype == 2;
        });

        $all = $eventAll->filter(function($value, $key){
            return $value->id_animaltype == 1  || 2 || 3;
        });


        $lokasi = [];
        foreach($eventAll as $daerah){
            if(!in_array($daerah->id_jakartatype, $lokasi)){
                array_push($lokasi, $daerah->id_jakartatype);
            }
        }

        $counter = 0;
        foreach($lokasi as $l){
            $tempData = $eventAll->filter(function($value, $key) use ($l){
                return $value->id_jakartatype == $l;
            });
            $lokasi[$l] = $tempData->count();
            unset($lokasi[$counter]);
            $counter++;
        }
        

        return view('modul.event.index',compact('event','anjing','kucing','all','lokasi'));
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
