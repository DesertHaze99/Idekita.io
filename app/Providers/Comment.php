<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Posts extends Model
{
    protected $table = 'comment';
    //primary key = "id"
    protected $primaryKey = 'comment_id';
    
    //disable created_at and updated_at
    public $timestamps = false;
    //fillable column
    protected $fillable = [
    	'content_comment',
    ];

    public function post()
    {
        return $this->hasMany(\App\Posts::class,'comment_id','post_id');
    }
}