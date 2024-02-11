<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    //
    public function index(Request $request)
    {


        $user_id = 0;

        $ticket = new Ticket;
        $ticket->name = $request->name;
        $ticket->email = $request->email;
        $ticket->phone = $request->phone;
        $ticket->body = $request->body;

        if (auth()->check()) {
            $user_id = $request->user()->id;
        }

        $ticket->user_id = $user_id;
        $ticket->save();




        return redirect()->route('home');
    }
}
