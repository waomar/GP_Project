<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $table = "hospitals_create";
    protected $fillable = [
        'admin_id', 'post_id','hospital_id', 'password','name' ,'email','adress','type','created_at','updated_at' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',  
    ];
    public function admin(){
        return $this->belongsTo('App\Admin','admin_id');
    }
    public function post(){
        return $this->hasMany('Post\User','hospital_id');
    }
}
