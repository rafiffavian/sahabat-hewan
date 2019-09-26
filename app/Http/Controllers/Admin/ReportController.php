<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Katpelaporan;
use App\Report;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $report = Report::all();
        return view('admin.modul-report.report-table',compact('report'));
    }

    public function grafik()
    {
        $kucing = Report::where('kategori_hewan', 'kucing')->get();

        $anjing = Report::where('kategori_hewan', 'anjing')->get();

        $pelaporanKucing = [];
        $pelaporanAnjing = [];

        foreach($kucing as $s){
            if(isset($pelaporanKucing[$s->kat_pelaporan->name])){
                $pelaporanKucing[$s->kat_pelaporan->name] = $pelaporanKucing[$s->kat_pelaporan->name] + 1;
            } else {
                $pelaporanKucing[$s->kat_pelaporan->name] = 1;
            }
        }

        foreach($anjing as $s){
            if(isset($pelaporanAnjing[$s->kat_pelaporan->name])){
                $pelaporanAnjing[$s->kat_pelaporan->name] = $pelaporanAnjing[$s->kat_pelaporan->name] + 1;
            } else {
                $pelaporanAnjing[$s->kat_pelaporan->name] = 1;
            }
        }

        return view('admin.modul-report.report-grafik',compact('pelaporanKucing','pelaporanAnjing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $katPelaporan = Katpelaporan::all();
        return view('admin.modul-report.report-create',compact('katPelaporan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file =  $request->file(['image_one','image_two','image_three','image_four','image_five']);
        $fileNameArr = explode('.',$file->getClientOriginalName());
        $fileName = $fileNameArr[0] . '-' . time() . '.' . $fileNameArr[1];
        $file->move('remortimage', $fileName);

        $data = $request->all();
        unset($data['token']);
        $data['image_one'] = $fileName;
        $data['image_two'] = $fileName;
        $data['image_three'] = $fileName;
        $data['image_four'] = $fileName;
        $data['image_five'] = $fileName;

        $save = Event::create($data);

        if(!$save){
            File::delete('remortimage/'.$fileName);
        } else{
            return redirect()->route('report.index');
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
        $detailReport = Report::findOrFail($id); 
        return view('admin.modul-report.report-detail',compact('detailReport'));
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
        $gambar_one = Report::find($id)->image_one;
        $gambar_two = Report::find($id)->image_two;
        $gambar_three = Report::find($id)->image_three;
        $gambar_four = Report::find($id)->image_four;
        $gambar_five = Report::find($id)->image_five;
        // dd($gambar);
        // exit();
        File::delete('remortimage/' . $gambar_one);
        File::delete('remortimage/' . $gambar_two);
        File::delete('remortimage/' . $gambar_three);
        File::delete('remortimage/' . $gambar_four);
        File::delete('remortimage/' . $gambar_five);
        $delete_action = Report::where('id',$id)->delete();
        if ($delete_action){
            return redirect()->route('report.index');
        }else{
            echo "Gagal Delete";
        }
    }
}
