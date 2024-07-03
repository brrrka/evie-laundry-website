<?php

namespace App\Http\Controllers;

use App\Models\Staffs;
use App\Models\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staffpage(){
        $data = Staffs::orderBy('staff_id')->paginate(5);
        $staff = Staffs::get();
        return view('staff.staff', compact(['data', 'staff']));
    }

    public function create(){
        return view ('staff.create');
    }

    public function save(Request $request){
        $validation = $request->validate([
            'nama' => 'required',
            'role' => 'required', 
        ]);
        $data = Staffs::create($validation);
        if($data){
            Session()->flash('success', 'Penambahan Staff Berhasil');
            return redirect (route('staff'));
        }
        else{
            Session()->flash('error', 'Penambahan Staff tidak berhasil');
            return redirect (route('staff/create'));
        }
    }

    public function delete($id){
        $staffs = Staffs::findOrFail($id)->delete();
        if($staffs){
            Session()->flash('success', 'Penambahan Staff Berhasil');
            return redirect (route('staff'));
        }
        else{
            Session()->flash('error', 'Penambahan Staff tidak berhasil');
            return redirect (route('staff'));
        }
    }
    public function edit($id){
        $staffs = staffs::findOrFail($id);
        return view ('staff.edit', compact('staffs'));
    }

    public function update(Request $request, $id){
        $staffs = Staffs::findOrFail($id);
        $nama = $request->nama;
        $role = $request->role;
        $staffs->nama = $nama;
        $staffs->role = $role;
        $data = $staffs -> save();
        if($data){
            Session()->flash('success', 'Penambahan Staff Berhasil');
            return redirect (route('staff'));
        }
        else{
            Session()->flash('error', 'Penambahan Staff tidak berhasil');
            return redirect (route('staff/update'));
        }
    }
}
