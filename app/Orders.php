<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public function user() {
        return $this->belongsTo('App\User','orderer_id');
    }
}
