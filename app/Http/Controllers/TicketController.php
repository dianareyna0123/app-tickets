<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    //

    public function add ()
    {
        return view('ticket.add');
    }
}
