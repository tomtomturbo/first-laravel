<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function showAll() {


       $messages = Message::all()->sortByDesc('created_at');
       return view('messages', ['messages' => $messages]);
    }
}

