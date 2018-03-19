<?php

namespace App\Http\Controllers;

use App\ContactSubscription;
use App\DismissedMessage;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageSubscriptionsController extends Controller
{
    public function index() {
        $contactMessageSubscriptions = ContactSubscription::where('contact_id', Auth::user()->id)->get(['message_sub_id']);
//        dd($contactMessageSubscriptions);
        $dismissedMessages = DismissedMessage::where('contact_id', Auth::user()->id)->get(['message_id']);
        $messages = Message::whereIn('sub_id', $contactMessageSubscriptions)->whereNotIn('id', $dismissedMessages)->get();

        return $messages;
    }
}
