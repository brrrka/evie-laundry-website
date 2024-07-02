<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerpage(){
        return view('customer.customer');
    }

    public function create(){
        return view('customer.create');
    }
}