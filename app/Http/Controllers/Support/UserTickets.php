<?php

namespace App\Http\Controllers\Support;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserTickets extends Controller
{
    public function viewTicket()
    {

    }
    public function listTickets()
    {
      $tickets = DB::table('support_tickets')
        ->where('uid', Auth::id())
        ->paginate(10);
      return view('users.dashboard.tickets', ['tickets' => $tickets]);
    }
    public function createTicket()
    {
      return view('users.functions.support.create');
    }
}
