<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function layananpage(){
        $layanan = Layanan::all();
        return view('layanan.layanan', compact('layanan'));
    }

    public function create(){
        return view('layanan.create');
    }
    public function store(Request $request){
        
        Layanan::create([
            'id_layanan' => $request->id_layanan,
            'nama_layanan' => $request->nama_layanan,
            'biaya' => $request->biaya,
            'satuan' => $request->satuan,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect (route('layanan'))->with('message', 'Layanan ditambahkan');
    }

    public function delete($id){
        $layanan = Layanan::findOrFail($id)->delete();
        return redirect (route('layanan'));
    }
}