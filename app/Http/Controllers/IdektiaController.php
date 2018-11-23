<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use App\Post;


class IdektiaController extends Controller
{
    public function mainan(){
    	return view('layouts.main');
    }

     function post(){
    	//$data['customer'] = Customer::limit(10)->get();
    	//$data['customer-X'] = Customer::where('customer_id',10)->first();
    	//$data['customer'] = Customer::all()->where('deleted', false);
        $data['posts'] = Post::all();
        //dd($data['customer']);

    	return view('/', $data);
    }

	public function create(Request $request)
    {
    	// dd($request->first_name);
    	// query insert dengan eloquent
    	$c = new Post();
		$c->title = $request->title;
		$c->category = $request->category;
		$c->content = $request->content;
		$c->save();
    	return redirect('/');
    }

}


