<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     
    protected $table = "posts";
    protected $fillable = [
        'hospital_id', 'body', 'title',  'created_at','updated_at' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    public function  admin(){
        return $this->belongsTo('app\Admin','admin_id','id');
    }
    public function hospial(){
        return $this->belongsTo('app\Hospital','hospital_id','id');
    }
    public function donetes(){
        return $this->belongsToMany('App\User','donetes','post_id','user_id');
    }
    public function blood_type(){
        return $this->belongsTo('App\BloodType','blood_id');
    }
}
