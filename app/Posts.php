<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Posts extends Model
{
    protected $table = 'posts';
    //primary key = "id"
    protected $primaryKey = 'post_id';
    
    //disable created_at and updated_at
    public $timestamps = false;
    //fillable column
    protected $fillable = [
    	'content',
		'category', 
		'title'
    ];

    public function post()
    {
        return $this->hasMany(\App\Posts::class,'post_id','post_id');
    }
}