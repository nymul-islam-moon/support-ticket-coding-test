<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\SendCustomer;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return view('admin.dashboard', compact('tickets'));
    }

    public function close_ticket(Request $request, Ticket $ticket) {
        $ticket->status = true;
        $customer = User::find($ticket->created_by);
        $ticket->save();
        Mail::to($customer->email)->send(new SendCustomer($ticket));
        return back();
    }
}
