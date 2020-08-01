<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketFormRequest;
use App\Ticket;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function create() {
        return view('tickets.create');
    }

    public function store(TicketFormRequest $request) {
        $slug = uniqid();
        $ticket = new Ticket(array(
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'slug' => $slug,
            'user_id' => -1
        ));

        $ticket->save();

        return redirect('/contacto')->with('status', '¡Su ticket se creó satisfactoriamente! El código de su solicitud es: '.$slug);
    }
}
