<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DismissedMessage extends Model
{
    public function contact() {
        return $this->belongsTo('App\User');
    }

    public function message() {
        return $this->belongsTo('App\Message');
    }
}
