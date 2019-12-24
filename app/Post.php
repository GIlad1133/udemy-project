<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $directory = "/images/";
    //protected $table = 'posts';


//Accessors
//    public function getTitleAttribute($value){
//        return strtoupper($value);
//
//    }
//mutators
//    public function setTitleAttribute($value){
//
//        $this->attributes['title'] = strtoupper($value);;
//    }
//
//    public static function scopeLatest($query){
//       return $query->orderBy('id', 'asc')->get();
//    }
    protected $fillable = ['title', 'body', 'is_admin', 'post_photo'];

    public function getPostPhotoAttribute($value){
        $path = "/images/" . $value;
        return $path;
    }

}
