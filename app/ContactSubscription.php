<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactSubscription extends Model
{
    public function contact() {
        return $this->belongsTo('App\User');
    }

    public function messageSubscription() {
        return $this->belongsTo('App\MessageSubscription');
    }
}
