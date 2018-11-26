<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use App\Posts;


class IdektiaController extends Controller
{
    public function mainan(){
    	return view('layouts.main');
    }

    function posts(){
        $data['posts'] = DB::table('posts')->get();

        return view('posts', $data);
    }

     function Post(){
    	//$data['customer'] = Customer::limit(10)->get();
    	//$data['customer-X'] = Customer::where('customer_id',10)->first();
    	//$data['customer'] = Customer::all()->where('deleted', false);
        $data['posts'] = Posts::all();
        //dd($data['customer']);

    	return view('/', $data);
    }

	public function create(Request $request)
    {
    	// dd($request->first_name);
    	// query insert dengan eloquent
    	$c = new Posts();
		$c->title = $request->title;
		$c->category = $request->category;
		$c->content = $request->content;
		$c->save();
    	return redirect('/');
    }

    public function uploadPhoto(Request $request)
    {
        $this->validate($request, [
            'profil_picture' => 'mimes:jpg |max:4096',
        ],
            $messages = [
                'required' => 'The :attribute field is required.',
                'mimes' => 'Only jpeg, png, bmp,tiff are allowed.'
            ]
        );
     // Now save your file to the storage and file details at database.
    }


    public function join_post_to_comment()
    {
        //join pertama
        $post = Posts::join('posts','posts.post_id','=','comment.post_id')
        ->where('posts.post_id',1)
        ->get();
        dd($post);
        //join ke dua, di set dulu function customer() pada model class Store 
    }


}


