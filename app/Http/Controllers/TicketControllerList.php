<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketControllerList extends Controller
{
    //

    
    public function list ()
    {
        return view('ticket.list');
    }
}
