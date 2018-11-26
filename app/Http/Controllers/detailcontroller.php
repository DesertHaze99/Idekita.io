<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailcontroller extends Controller
{
    public function detail(Request $request, $post_id){
    	$_POST('$post_id')=$post_id;
    	return view('detail');
    }
}
