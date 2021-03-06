<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function chat()
    {
        return view('chat');
    }

    // public function send(request $request)
    // {
    //     $user = User::find(Auth::id());
    //     event(new ChatEvent($request->message, $user));
    // }

    public function send()
    {
        $message = 'Hello';
        $user = User::find(Auth::id());
        event(new ChatEvent($message, $user));
    }
}
