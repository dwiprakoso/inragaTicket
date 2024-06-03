<?php

namespace App\Http\Controllers;

use App\Models\crudFik;
use Illuminate\Http\Request;

class pemesananfikController extends Controller
{
    public function katfik(){
        return view('pemesananFik');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_fik' => 'required',
            'file_fik' => 'required|mimes:pdf|max:10240',
            'fik_kapten' => 'required',
            'nofik_kapten' => 'required',   
            'fik_official' => 'required',
            'nofik_official' => 'required',
            'bukti_tffik' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

       
        $fileTimPath = $request->file('file_fik')->storeAs('public/fileFik', $request->file('file_fik')->getClientOriginalName());
        $buktiTfPath = $request->file('bukti_tffik')->storeAs('public/imageFik', $request->file('bukti_tffik')->getClientOriginalName());


        $tablesma = new crudFik();
        $tablesma->nama_fik = $request->input('nama_fik');
        $tablesma->file_fik = $fileTimPath;
        $tablesma->fik_kapten = $request->input('fik_kapten');
        $tablesma->nofik_kapten = $request->input('nofik_kapten');
        $tablesma->fik_official = $request->input('fik_official');
        $tablesma->nofik_official = $request->input('nofik_official');
        $tablesma->bukti_tffik = $buktiTfPath;

        $tablesma->save();

        return redirect()->route('pemesananFik')->with('message', 'Data berhasil disimpan!');

    }
    
}
