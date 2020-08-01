<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketFormRequest;
use App\Ticket;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    /* Retorna la vista para lac creación de una nueva ticket */
    public function create() {
        return view('tickets.create');
    }

    /* Recibe la petición por el método post del formulario de nueva ticket,
    * luego crea un nuevo registro dentro de la base de datos */
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

    // Retorna la vista para visualizar todos los tickets almacenados dentro de la DB
    public function index() {
        $tickets = Ticket::all();

        return view('tickets.index', compact('tickets'));
    }

    // Muestra el detalle de un ticket en específico según su código único recibido
    public function show($slug) {
        $ticket = Ticket::where('slug', $slug)->firstOrFail();

        return view('tickets.show', compact('ticket'));
    }
}
