<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifikasiController extends Controller
{
    
    public function create($id)
    {
        $verif = \App\Models\data_surat::find($id);
        return view('layout.form.form_verifikasi_surat', ['data_surat' => $verif]);
    }

    public function store(request $request, $id)
    {
        $attr = request()->validate([
            'pengirim_surat' => 'required',
            'penerima_surat' => 'required',
            'seksi' => 'required',
            'bukti' => 'required|image|mimes:jpeg,png,jpg,svg',
        ]);

        $bukti = request()->file('bukti') ? request()->file('bukti')->store("files/bukti") : null;
        $attr['bukti'] = $bukti;

        $verif = \App\Models\data_surat::find($id);
        $verif->update($attr);
        return redirect('admin/index')->with('sukses', 'Data Berhasil di update');
    }
}
