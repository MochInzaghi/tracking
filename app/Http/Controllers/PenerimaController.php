<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenerimaController extends Controller
{
    public function index(Request $request)
    {
    	if ($request->has('cari')) {
    		$data_surat = \App\Models\data_surat::where('alamat_penerima', 'LIKE', '%'.$request->cari.'%')->get();
    	}else{
    		$data_surat = \App\Models\data_surat::all();
    	}
    	return view('layout.index_penerima', ['data_surat' => $data_surat]);
    }

    public function create(Request $request)
    {
    	return view('layout.form.form_penerima');
    }

    public function store(Request $request)
    {
        $attr = request()->validate([
            'penerima_surat' => 'required',
            'seksi_penerima' => 'required',
            'bukti' => 'required|image|mimes:jpeg,png,jpg,svg',
            'pengarsip_surat' => 'required',
            'seksi_pengarsip' => 'required',
        ]);

        $attr = $request->all();

        $bukti = request()->file('bukti') ? request()->file('bukti')->store("files/bukti") : null;
        
        $attr['bukti'] = $bukti;

        //create new post
        \App\Models\data_surat::create($attr);

        session()->flash('success', 'Data Penerimaaan berhasil di upload');

        return redirect('penerima/data-penerima');
    }
}
