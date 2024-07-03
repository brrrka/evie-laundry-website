<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerpage(){
        $data = Customer::paginate(5);
        return view('customer.customer', compact('data'));
    }

    public function create(){
        return view('customer.create');
    }

    public function store (Request $request){
        $request->validate([
            'nama_customer' => ['required'],
            'alamat' => ['required'],
        ]);
        Customer::create([
            'nama_customer' => $request->nama_customer,
            'alamat' => $request->alamat,
        ]);
        return redirect()->route('customer')->with('success', 'Customer created successfully.');
    }

    public function delete($id){
        $data = Customer::findOrFail($id)->delete();
        return redirect()->route('customer');
    }
}