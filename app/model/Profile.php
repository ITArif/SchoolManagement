<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

}
