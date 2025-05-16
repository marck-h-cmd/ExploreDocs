<?php

namespace App\Http\Controllers;
use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ContactoController extends Controller
{
     public function index()
    {
        return view('pages.user.contacto.contacto');

    }

   
    public function store(Request $request)
    {
        
        $request->validate([
            'nombres' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mensaje' => 'required|string',
        ]);

        Contacto::create([
            'nombres' => $request->nombres,
            'email' => $request->email,
            'mensaje' => $request->mensaje,
        ]);


        Mail::to('ejemplo@gmail.com');
        return redirect()->back()->with('success', 'Mensaje enviado correctamente.');
    }
}
