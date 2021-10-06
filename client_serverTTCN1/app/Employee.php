<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = [];
    public function user()
    {
        # code...
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
