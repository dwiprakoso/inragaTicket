<?php

namespace App\Http\Controllers;

use App\Models\crudFik;
use App\Models\crudSMA;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function katsma(){
        return view('pemesananSma');
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'nama_sekolah' => 'required',
            'logo_sekolah' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'file_tim' => 'required|mimes:pdf|max:10240',
            'nama_kapten' => 'required',
            'no_kapten' => 'required',
            'nama_official' => 'required',
            'no_official' => 'required',
            'nama_capo' => 'required',
            'no_capo' => 'required',
            'bukti_tf' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $logoSekolahPath = $request->file('logo_sekolah')->storeAs('public/images', $request->file('logo_sekolah')->getClientOriginalName());
        $fileTimPath = $request->file('file_tim')->storeAs('public/files', $request->file('file_tim')->getClientOriginalName());
        $buktiTfPath = $request->file('bukti_tf')->storeAs('public/images', $request->file('bukti_tf')->getClientOriginalName());


        $tablesma = new crudSMA();
        $tablesma->nama_sekolah = $request->input('nama_sekolah');
        $tablesma->logo_sekolah = $logoSekolahPath;
        $tablesma->file_tim = $fileTimPath;
        $tablesma->nama_kapten = $request->input('nama_kapten');
        $tablesma->no_kapten = $request->input('no_kapten');
        $tablesma->nama_official = $request->input('nama_official');
        $tablesma->no_official = $request->input('no_official');
        $tablesma->nama_capo = $request->input('nama_capo');
        $tablesma->no_capo = $request->input('no_capo');
        $tablesma->bukti_tf = $buktiTfPath;

        $tablesma->save();

        return redirect()->route('pemesananSma')->with('message', 'Data berhasil disimpan!');
    }

    

    public function create(){

    }
    public function update(Request $request, $id){
        // // Validasi data yang dikirim dari form
        // $request->validate([
        //     'file_tim' => 'sometimes|mimes:pdf|max:10000', // Memastikan file tim adalah PDF dengan maksimal 10MB
        //     'nama_sekolah' => 'required|string',
        //     'nama_kapten' => 'required|string',
        //     'no_kapten' => 'required|string',
        //     'nama_official' => 'required|string',
        //     'no_official' => 'required|string',
        //     'nama_capo' => 'required|string',
        //     'no_capo' => 'required|string',
        //     'logo_sekolah' => 'sometimes|image', // Memastikan logo sekolah adalah gambar
        //     'bukti_tf' => 'sometimes|image', // Memastikan bukti transfer adalah gambar
        // ]);
    
        // // Ambil data yang akan diupdate
        // $data = crudSMA::findOrFail($id);
    
        // // Update data kecuali file jika tidak diisi ulang
        // $data->update($request->except(['file_tim', 'logo_sekolah', 'bukti_tf']));
    
        // // Jika file diisi ulang, update file yang baru
        // if ($request->hasFile('file_tim')) {
        //     $file_timPath = $request->file_tim->store('files', 'public');
        //     $data->file_tim = $file_timPath;
        // }
    
        // if ($request->hasFile('logo_sekolah')) {
        //     $logo_sekolahPath = $request->logo_sekolah->store('images', 'public');
        //     $data->logo_sekolah = $logo_sekolahPath;
        // }
    
        // if ($request->hasFile('bukti_tf')) {
        //     $bukti_tfPath = $request->bukti_tf->store('images', 'public');
        //     $data->bukti_tf = $bukti_tfPath;
        // }
    
        // $data->save();
    
        // return redirect()->route('route.name')->with('success', 'Data berhasil diupdate');
    }

}
