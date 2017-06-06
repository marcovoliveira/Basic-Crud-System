<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exames extends Model
{
    public function users(){
        return $this->belongsTo('App\User');
    }

     protected $fillable = [
        'desc', 'users_id' 
    ];
}
