<?php

namespace App\Http\Controllers;

use App\Models\Uzsakymas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UzsakymasController extends Controller
{
    public function create()
    {
        if (!Auth::user()->hasRole('Administratorius')) {
            abort(403, 'Unauthorized action.');
        }

        return view('uzsakymai.create');
    }

    public function store(Request $request)
    {
        if (!Auth::user()->hasRole('Administratorius')) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'patiekalo_id' => 'required',
            'vartotojo_id' => 'required',
            'kiekis' => 'required',
            'kaina' => 'required',
        ]);

        Uzsakymas::create([
            'patiekalo_id' => $request->patiekalo_id,
            'vartotojo_id' => $request->vartotojo_id,
            'kiekis' => $request->kiekis,
            'kaina' => $request->kaina,
            'patvirtintas' => false,
        ]);

        return redirect()->route('uzsakymai.index')
            ->with('success', 'Užsakymas sėkmingai pridėtas.');
    }

    public function index()
    {
        $uzsakymai = Uzsakymas::all();

        return view('uzsakymai.index', compact('uzsakymai'));
    }

    public function show(Uzsakymas $uzsakymas)
    {
        if (!Auth::user()->hasRole('Administratorius') && $uzsakymas->vartotojo_id !== Auth::user()->id) {
            abort(403, 'Unauthorized action.');
        }

        return view('uzsakymai.show', compact('uzsakymas'));
    }
    
   
}
