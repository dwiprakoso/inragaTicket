<?php

namespace App\Http\Controllers;

use App\Mail\AdminNotification;
use App\Mail\SmaNotification;
use App\Models\crudFik;
use App\Models\crudSMA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class PemesananController extends Controller
{
    public function katsma(){
        return view('pemesananSma');
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'nama_sekolah' => 'required',
            'logo_sekolah' => 'required|image|mimes:png,jpg|max:2048',
            'file_tim' => 'required|mimes:pdf|max:10240',
            'nama_kapten' => 'required',
            'no_kapten' => 'required',
            'nama_official' => 'required',
            'no_official' => 'required',
            'nama_capo' => 'required',
            'no_capo' => 'required',
            'bukti_tf' => 'required|image|mimes:png,jpg|max:2048',
        ]);

        $fileTimName = $request->file('file_tim')->getClientOriginalName();
        $buktiTfName = $request->file('bukti_tf')->getClientOriginalName();
        $logoSekolahName = $request->file('logo_sekolah')->getClientOriginalName();

        $fileTimPath = $request->file('file_tim')->storeAs('public/uploads/fileSma', $fileTimName);
        $buktiTfPath = $request->file('bukti_tf')->storeAs('public/uploads/imageSma', $buktiTfName);
        $logoSekolahPath = $request->file('bukti_tf')->storeAs('public/uploads/imageSma', $logoSekolahName);


        $tablesma = new crudSMA();
        $tablesma->nama_sekolah = $request->input('nama_sekolah');
        $tablesma->logo_sekolah = $logoSekolahName;
        $tablesma->file_tim = $fileTimName;
        $tablesma->nama_kapten = $request->input('nama_kapten');
        $tablesma->no_kapten = $request->input('no_kapten');
        $tablesma->nama_official = $request->input('nama_official');
        $tablesma->no_official = $request->input('no_official');
        $tablesma->nama_capo = $request->input('nama_capo');
        $tablesma->no_capo = $request->input('no_capo');
        $tablesma->bukti_tf = $buktiTfName;

        // Data untuk email
        $data = [
            'nama_sekolah' => $request->input('nama_sekolah'),
            'nama_kapten' => $request->input('nama_kapten'),
            'nama_official' => $request->input('nama_official'),
            // Tambahkan data lainnya jika diperlukan
        ];

        Mail::to('inragaid@gmail.com')->send(new SmaNotification($tablesma));

        $tablesma->save();

        return redirect()->route('pemesananSma')->with('message', 'Data berhasil disimpan!');
    }

    

    public function create(){

    }
    public function update(Request $request, $id){
    }
    public function show() : View
    {
        //get all products
        $tablesma = crudSMA::latest()->paginate(10);

        //render view with products
        return view('show', compact('tablesma'));
    }

}
