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
        $report = Report::where('status','2')->get();
        return view('admin.modul-report.report-table',compact('report'));
    }

    public function tableberhasil()
    {
        $report = Report::where('status','1')->get();
        return view('admin.modul-report.report-table-berhasil',compact('report'));
    }

    public function grafik()
    {
        $kucing = Report::where('kategori_hewan', 'kucing')->where('status', '2')->get();

        $anjing = Report::where('kategori_hewan', 'anjing')->where('status', '2')->get();

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
    public function grafikberhasil()
    {
        $kucing = Report::where('kategori_hewan', 'kucing')->where('status', '1')->get();

        $anjing = Report::where('kategori_hewan', 'anjing')->where('status', '1')->get();

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

        return view('admin.modul-report.report-grafikberhasil',compact('pelaporanKucing','pelaporanAnjing'));
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

    public function fileUpload(Request $request){
        $file = $request->file('file');
        $file->move('remortimage', $file->getClientOriginalName());
        return response()->json($file->getClientOriginalName());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $gambar = $data['gambar'];
        $gambarExplode = explode(',', $gambar);

        if(isset($gambarExplode[0])){
            $data['image_one'] = $gambarExplode[0];
        }
        if(isset($gambarExplode[1])){
            $data['image_two'] = $gambarExplode[1];
        }
        if(isset($gambarExplode[2])){
            $data['image_three'] = $gambarExplode[2];
        }
        if(isset($gambarExplode[3])){
            $data['image_four'] = $gambarExplode[3];
        }
        if(isset($gambarExplode[4])){
            $data['image_five'] = $gambarExplode[4];
        }

        unset($data['_token']);
        unset($data['gambar']);

        $admin = Auth::user()->report();
        $saveAdmin = $admin->create($data);
        if($saveAdmin){
            return response()->json($data);
        } else {
            return 'false';
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

    public function sukses(Request $request, $id)
    {
        $detailReport = Report::findOrFail($id); 
        if($detailReport->status == 2){
            Report::where('id', $id)->update(array('status' => '1'));
            return redirect()->route('report.index');
        }

        else{
            Report::where('id', $id)->update(array('status' => '2'));
            return redirect()->route('laporan.tableberhasil');
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
