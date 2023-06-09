<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class sentralisasiController extends Controller
{
    public function index()
    {
        return view('layouts.forms.setSentralisasi');
    }

    public function index2()
    {
        $sentralisasi['sentralisasis'] = Http::get('http://127.0.0.1:8070/api/setSentralisasi')->collect();

        $data = array_merge($sentralisasi);

        return view('layouts.forms.detailSentralisasi', $data);
    }

    public function create(Request $req)    
    {
        // $req->validate([
        //     'persentasi_sentralisasi' => 'required',
        //     'keterangan' => 'required',
        // ]);

        // $persentasi_sentralisasi = $req->input('persentasi_sentralisasi');
        // $keterangan = $req->input('keterangan');

        $res = Http::post('http://127.0.0.1:8070/api/storeSentralisasi', [
            'persentasi_sentralisasi' => $req->get('persentasi_sentralisasi'),
            'keterangan' => $req->get('keterangan'),

        ]);

        if (!$res->failed()) {
            return back()->withErrors(['message' => 'error when create RPP']);
        }
        return redirect()->route('detailSentralisasi');
    }

    public function index3()
    {
        $sentralisasi['sentralisasis'] = Http::get('http://127.0.0.1:8070/api/setSentralisasi')->collect();

        $data = array_merge($sentralisasi);

        return view('layouts.forms.editSentralisasi', $data);
    }

    public function update(Request $req, $id)    
    {
        // dd($req->all());
        $res = Http::put('http://127.0.0.1:8070/api/ubahSentralisasi/'.$id, [
            'persentasi_sentralisasi' => $req->input('persentasi_sentralisasi'),
            'keterangan' => $req->input('keterangan'),

        ]);

        // dd($res);
        

        if (!$res->failed()) {
            return back()->withErrors(['message' => 'error when update sentralisasi']);
        }
        return redirect()->route('detailSentralisasi');
    }

    public function destroy($id){
        // Session::flash('success', 'Your data has been successfully deleted.');
        // Session::flash('failed', 'Your data was failed to delete.');
        $data = Http::delete('http://127.0.0.1:8070/api/setSentralisasi/'.$id);

        if($data['code'] == "400"){
            $failedMessage = Session::get('failed');
            return redirect()->route('detailSentralisasi', compact('failedMessage'));
        }else{
            $successMessage = Session::get('success');
            return redirect()->route('detailSentralisasi',compact('successMessage'));
        }
    }
}
