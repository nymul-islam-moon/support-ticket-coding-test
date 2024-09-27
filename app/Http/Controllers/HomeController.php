<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketRequest;
use App\Mail\SendAdmin;
use App\Models\Admin;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $tickets = Ticket::all();
        return view('home', compact('tickets'));
    }

    public function store_tickets(StoreTicketRequest $request) {
        $formData = $request->validated();
        $formData['created_by'] = auth()->id();
        $formData['status'] = false;

        $admin = Admin::where('id', 1)->first();
        // dd($admin->email);
        $ticket = Ticket::create($formData);

        Mail::to($admin->email)->send(new SendAdmin($ticket));

        return redirect()->route('home');
    }
}
