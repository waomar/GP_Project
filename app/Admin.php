<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admins";
    protected $fillable = [
        'name', 'password', 'phone','email' ,'created_at','updated_at' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    public function users(){
        return $this->hasMany('App\User','admin_id');
    }
    public function hospials(){
        return $this->hasMany('App\hospital','hospital_id');
    }
}
