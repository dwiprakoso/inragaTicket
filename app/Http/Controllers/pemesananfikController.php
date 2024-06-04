<?php

namespace App\Http\Controllers;

use App\Mail\AdminNotification;
use App\Models\crudFik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
            'bukti_tffik' => 'required|image|mimes:png,jpg|max:2048',
        ]);

        // $file_buktitf_fik = $request->file('bukti_tffik');
       
        $fileTimName = $request->file('file_fik')->getClientOriginalName();
        $buktiTfName = $request->file('bukti_tffik')->getClientOriginalName();

        $fileTimPath = $request->file('file_fik')->storeAs('public/uploads/fileFik', $fileTimName);
        $buktiTfPath = $request->file('bukti_tffik')->storeAs('public/uploads/imageFik', $buktiTfName);
        
        $tablesma = new crudFik();
        $tablesma->nama_fik = $request->input('nama_fik');
        $tablesma->file_fik = $fileTimName;
        $tablesma->fik_kapten = $request->input('fik_kapten');
        $tablesma->nofik_kapten = $request->input('nofik_kapten');
        $tablesma->fik_official = $request->input('fik_official');
        $tablesma->nofik_official = $request->input('nofik_official');
        $tablesma->bukti_tffik = $buktiTfName;

        $tablesma->save();



         // Data untuk email
         $data = [
            'nama_fik' => $request->input('nama_fik'),
            'fik_kapten' => $request->input('fik_kapten'),
            'fik_official' => $request->input('fik_official'),
            // Tambahkan data lainnya jika diperlukan
        ];

        // Kirim email ke admin
        Mail::to('inragaid@gmail.com')->send(new AdminNotification($data));

        return redirect()->route('pemesananFik')->with('message', 'Data berhasil disimpan!');

    }
    
}
