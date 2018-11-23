<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\mahasiswa;
use App\Customer;

class HelloController extends Controller
{
    public function index()
    {
    	return view('login');
    }

    function test_db(){
    	$data['mahasiswa'] = DB::table('tbl_mahasiswa')->get();

    	return view('test_db', $data);
    }

    function customer(){
    	//$data['customer'] = Customer::limit(10)->get();
    	//$data['customer-X'] = Customer::where('customer_id',10)->first();
    	//$data['customer'] = Customer::all()->where('deleted', false);
        $data['customer'] = Customer::where('deleted',false)->get();
        //dd($data['customer']);

    	return view('customer', $data);
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

}


