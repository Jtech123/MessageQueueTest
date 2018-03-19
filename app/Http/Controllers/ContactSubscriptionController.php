<?php

namespace App\Http\Controllers;

use App\DismissedMessage;
use Illuminate\Support\Facades\Auth;

class ContactSubscriptionController extends Controller
{
    public function ActiveSubMessages() {

    }

    public function dismiss($id) {
        $dismissed = new DismissedMessage;
        $dismissed->contact_id = Auth::user()->id;
        $dismissed->message_id = $id;
        $dismissed->save();
    }
}
