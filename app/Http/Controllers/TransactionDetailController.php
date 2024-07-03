<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Staffs;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;

class TransactionDetailController extends Controller
{
    public function layananpage(){
        $transaksi = TransactionDetail::all();
        return view('transaksi.transaksi', compact('transaksi'));
    }

    public function pesananselesai(){
        return view('transaksi.transaksiselesai');
    }
    
    public function create(){
        $layanan = Layanan::all();
        $staffs = Staffs::all();
        return view ('transaksi.create', compact('layanan', 'staffs'));
    }

    public function store(Request $request){
        TransactionDetail::create([
            'no_pesanan'=> $request->no_pesanan,
            'id_layanan' => $request->id_layanan,
            'kuantitas' => $request->kuantitas,
            'total_biaya' => $request->total_biaya,
            'metode_pembayaran' => $request->metode_pembayaran,
            'status_pembayaran' => $request->status_pembayaran,
            'nama_customer' => $request->nama_customer
        ]);

        TransactionHeader::create([
            'no_pesanan' => $request->no_pesanan,
            'tanggal_masuk' => $request->tanggal_masuk,
            'cust_id' => $request->cust_id,
            'staff_id' => $request->staff_id,
        ]);

        return redirect (route('transaksi'))->with('message', 'transaksi ditambahkan');
    }

    public function delete($id){
        TransactionDetail::findOrFail($id)->delete();
        return redirect(route('transaksi'));
    }
}