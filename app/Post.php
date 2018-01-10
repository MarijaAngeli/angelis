<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'body','category_id','image','user_id','status','slug'];
    protected $dates = ['deleted_at'];
    
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function category(){
    	return $this->belongsTo('App\Category');
    }
    public function tags(){
    	return $this->belongsToMany('App\Tag');
    }
}
